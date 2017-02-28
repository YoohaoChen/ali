<?php
/**
 * Created by PhpStorm.
 * User: yoohao
 * Date: 2017/2/20
 * Time: 19:04
 */


require_once __DIR__.'/core/Ali.php';
$config = require(__DIR__.'/config/app.php');

$app = new \ali\base\Application($config);
$app->run();

(new \ali\base\Model())->test();