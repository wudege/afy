<?php

/**
 * @filename Index.php
 * @touch    26/11/2016 12:30
 * @author   Davis <daviszeng@outlook.com>
 * @version  1.0.0
 */

use Yaf\Controller_Abstract;

class IndexController extends Controller_Abstract
{
    public function indexAction()
    {
        $this->getView()->assign("content", "Hello World");
    }
}