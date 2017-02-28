<?php
/**
 * Created by PhpStorm.
 * User: yoohao
 * Date: 2017/2/20
 * Time: 20:17
 */

namespace ali\container;

use ali\base\Base;
use ReflectionClass;


class Container extends Base
{
    /**
     * @var array 单例对象
     */
    private $_singletons = [];
    /**
     * @var array 对象反射
     */
    private $_reflections = [];
    /**
     * @var array 对象依赖
     */
    private $_dependencies = [];
    /**
     * @var array 参数
     */
    private $_params = [];
    /**
     * @var array 类的定义
     */
    private $_definitions = [];

    /**
     * 获取对象实例
     * @param $class
     * @param array $params
     * @param array $config
     * @return mixed
     */
    public function get($class,$params = [],$config = [])
    {
        /*if (isset($this->_singletons[$class])) {
            //singletons
            return $this->_singletons[$class];
        } elseif (isset($this->_definitions[$class])) {
            return $this->build($class,$params,$config);
        }*/
        return $this->build($class,$params,$config);
    }

    /**
     * 设置类定义参数
     * @param $class
     * @param $params
     */
    public function set($class,$params)
    {
        //
    }

    /**
     * 创建一个对象实例
     * @param $class
     * @param $params
     * @param $config
     * @return object
     */
    protected function build($class,$params,$config)
    {
        $reflection = new ReflectionClass($class);
        $object = $reflection->newInstanceArgs();
        return $object;
    }

    /**
     * 获取依赖
     * @param $class
     */
    protected function getDependencies($class)
    {
        //
    }

}