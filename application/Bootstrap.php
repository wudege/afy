<?php

/**
 * @filename Bootstrap.php
 * @touch    26/11/2016 13:16
 * @author   Davis <daviszeng@outlook.com>
 * @version  1.0.0
 */

use Yaf\Bootstrap_Abstract;
use Yaf\Dispatcher;
use Yaf\Loader;

class Bootstrap extends Bootstrap_Abstract
{
    /**
     *
     * @author Davis <daviszeng@outlook.com>
     *
     * @param Dispatcher $dispatcher
     */
    public function _initAutoload(Dispatcher $dispatcher)
    {
        Loader::import(APP_PATH . '/vendor/autoload.php');
    }

}
