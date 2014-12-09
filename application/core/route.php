<?php
/**
 * Created by PhpStorm.
 * User: WispProxy
 * Date: 09.12.2014
 * Time: 14:07
 */

/*
 * This base route class
 */
class Route
{
    static function start()
    {
        $controller_name    =   'Main';
        $action_name        =   'index';

        $routes             =   explode('/', $_SERVER['REQUEST_URI']);

        /*
         * Get controller name
         */
        if(!empty($routes[1]))
        {
            $controller_name = $routes[1];
        }

        /*
         * Get action name
         */
        if (!empty($routes[2]))
        {
            $action_name = $routes[2];
        }

        $model_name         =   'Model_'.$controller_name;
        $controller_name    =   'Controller_'.$controller_name;
        $action_name        =   'action_'.$action_name;

        /*
         * Include model classes
         */
        $model_file         =   strtolower($model_name).'.php';
        $model_path         =   "application/models/".$model_file;
        if(file_exists($model_path))
        {
            include "application/models/".$model_file;
        }

        /*
         * Include controller classes
         */
        $controller_file    =   strtolower($controller_name).'.php';
        $controller_path    =   "application/controllers/".$controller_file;
        if(file_exists($controller_path))
        {
            include "application/controllers/".$controller_file;
        }
        else
        {
            /*
             * Need exception, but we use Error 404
             */
            Route::ErrorPage404();
        }

        /*
         * Create controller
         */
        $controller         =   new $controller_name;
        $action             =   $action_name;

        if(method_exists($controller, $action))
        {
            $controller->$action();
        }
        else
        {
            /*
             * Need exception, but we use Error 404
             */
            Route::ErrorPage404();
        }
    }

    function ErrorPage404()
    {
        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        header('HTTP/1.1 404 Not Found');
        header('Status: 404 Not Found');
        header('Location: '.$host.' 404');
    }
}
