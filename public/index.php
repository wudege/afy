<?php
/**
 * @filename index.php
 * @touch    25/11/2016 18:12
 * @author   Davis <daviszeng@outlook.com>
 * @version  1.0.0
 */
define("APP_PATH", realpath(dirname(__FILE__) . '/../'));
$app = new Yaf\Application(APP_PATH . "/conf/application.ini");
$app->bootstrap()->run();