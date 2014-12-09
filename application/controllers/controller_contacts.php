<?php
/**
 * Created by PhpStorm.
 * User: WispProxy
 * Date: 09.12.2014
 * Time: 14:28
 */

class Controller_Contacts extends Controller
{
    function action_index()
    {
        $this->view->generate('contacts_view.php', 'template_view.php');
    }
}
