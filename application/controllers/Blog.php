<?php

class Blog extends APP_Controller
{

    public function index()
    {
        $params = ['say' => 'hello world! 你好世界！','pp'=>'ok gogogo! 好！ '];
        $this->load($params);
    }

}
