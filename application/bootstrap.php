<?php
/**
 * Created by PhpStorm.
 * User: WispProxy
 * Date: 09.12.2014
 * Time: 13:52
 */

/*
 * Include files core
 */
require_once 'core/model.php';
require_once 'core/view.php';
require_once 'core/controller.php';

/*
 * This we include some modules: authentication, caching, ORM & etc.
 */
require_once 'core/route.php';
Route::start();
