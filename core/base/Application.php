<?php
/**
 * Created by PhpStorm.
 * User: yoohao
 * Date: 2017/2/20
 * Time: 19:33
 */

namespace ali\base;

use ali;


class Application extends ali\container\ServiceLocator
{
    public function __construct($config)
    {
        Ali::$app = $this;
        $config = $this->init($config);
        Base::__construct($config);
    }
    public function init($config)
    {
        foreach($this->defaultComponents() as $name=>$value)
        {
            $config['components']['$name'] = $value;
        }
        return $config;
    }

    public function run()
    {
        var_dump($this->db);
        //调用request处理请求
        //$response = $this->get('resquest')->resolve();
        //返回response响应
    }
    public function getRequest()
    {
        return $this->get('request');
    }

    public function defaultComponents()
    {
        return [
            'request' => 'ali\base\Request',
            'response' => 'ali\base\Response',
        ];
    }

    public function getDb()
    {
        echo 'Hello';
        return $this->get('db');
    }

}