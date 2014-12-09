<?php
/**
 * Created by PhpStorm.
 * User: WispProxy
 * Date: 09.12.2014
 * Time: 14:14
 */

/*
 * This base view class
 */
class View
{
    function generate($content_view, $template_view, $data = NULL)
    {
        /*
         * Include templates
         */
        include 'application/views/'.$template_view;
    }
}
