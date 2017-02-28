<?php
/**
 * Created by PhpStorm.
 * User: yoohao
 * Date: 2017/2/20
 * Time: 19:49
 */

namespace ali;


use ali\container\Container;

defined('CORE_PATH') or define('CORE_PATH',__DIR__);

class BaseAli
{
    /**
     * @var
     */
    public static $app;
    /**
     * @var array
     */
    public static $classMap = [];
    /**
     * @var Container
     */
    public static $container;
    public static $aliases = [];

    /**
     * @param $alias
     * @return mixed
     */
    public static function getAlias($alias)
    {
        return static::$aliases[$alias];
    }

    /**
     * @param $alias
     * @param $path
     */
    public static function setAlias($alias,$path)
    {
        //别名使用'@'开头
        if (strncmp($alias,'@',1)) {
            //添加'@'开头
            $alias = '@'.$alias;
        }
        $pos = strpos($alias,'/');
        static::$aliases[$alias] = $path;
    }

    /**
     * @param $className
     */
    public static function autoLoad($className)
    {
        if (isset(static::$classMap[$className])){
            $classFile = static::$classMap[$className];
            if (is_file(static::$classMap[$className])) {
                include($classFile);
            }
        }
    }
    public static function createObject($class,$params = [],$config = [])
    {
        return static::$container->get($class,$params,$config);
    }

}