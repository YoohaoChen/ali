<?php
/**
 * Created by PhpStorm.
 * User: yoohao
 * Date: 2017/2/20
 * Time: 20:13
 */

namespace ali\base;


class Base
{

    public function __construct($config = [])
    {
        if (!empty($config)) {
            foreach ($config as $key=>$val)
            {
                $this->$key = $val;
            }
        }
    }

    public function __call($name,$arguments)
    {
        //访问不可访问方法
    }

    public function __set($name,$value)
    {
        $setter = 'set' . $name;
        //var_dump($value);
        //var_dump(method_exists($this,$setter));
        $this->$setter($value);
    }

    public function __get($name)
    {
        $getter = 'get'.$name;
        //var_dump(method_exists($this,$getter));
        return $this->$getter();
        //var_dump($getter);
    }

}