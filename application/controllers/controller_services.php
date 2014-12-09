<?php
/**
 * Created by PhpStorm.
 * User: WispProxy
 * Date: 09.12.2014
 * Time: 14:35
 */

class Controller_Services extends Controller
{
    function action_index()
    {
        $this->view->generate('services_view.php', 'template_view.php');
    }
}
