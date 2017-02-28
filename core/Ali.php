<?php

/**
 * Created by PhpStorm.
 * User: yoohao
 * Date: 2017/2/20
 * Time: 19:05
 */

require_once __DIR__.'/BaseAli.php';

class Ali extends \ali\BaseAli
{

}


spl_autoload_register(['Ali','autoLoad'],true,true);
Ali::$classMap = require(__DIR__.'/classMap.php');
Ali::$container = new ali\container\Container();