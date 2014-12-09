<?php
/**
 * Created by PhpStorm.
 * User: WispProxy
 * Date: 09.12.2014
 * Time: 14:20
 */

/*
 * This base controller class
 */
class Controller
{
    public  $model;
    public  $view;

    function __construct()
    {
        $this->view = new View();
    }
    function action_index()
    {
        /*
         * This your code for default action
         */
    }
}
