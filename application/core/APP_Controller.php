<?php

if (!defined('BASEPATH'))
    exit('No direct access allowed.');

class APP_Controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function load($params, $path = null)
    {
        if (is_array($params) && $params) {
            foreach ($params as $key => $value) {
                $this->ci_smarty->assign($key, $value);
            }
        }
        $file_path = $this->config->config['template_dir'] . "/" . $this->router->class . "/" . $this->router->method . ".tpl";
        if ($path) {
            $this->ci_smarty->display($path);
        } else if (file_exists($file_path)) {
            $this->ci_smarty->display($file_path);
        }
    }

}
