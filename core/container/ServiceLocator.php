<?php
/**
 * Created by PhpStorm.
 * User: yoohao
 * Date: 2017/2/23
 * Time: 10:25
 */

namespace ali\container;

use ali;
use ali\base\Component;

class ServiceLocator extends Component
{
    private $_definitions = [];
    private $_components = [];

    /*public function __get($name)
    {
        return $this->get($name);
    }*/

    public function get($name)
    {
        //var_dump($this->_components);
        return Ali::createObject($this->_components[$name]['class']);
    }

    public function set($id,$component)
    {
        $this->_components[$id] = $component;
    }

    public function setComponents($components)
    {
        //设置components的值
        //echo 'setComponents';
        foreach($components as $id=>$component)
        {
            $this->set($id,$component);
        }
    }

    public function getComponents()
    {
        //
    }
}