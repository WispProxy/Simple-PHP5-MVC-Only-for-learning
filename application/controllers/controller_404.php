<?php
/**
 * Created by PhpStorm.
 * User: WispProxy
 * Date: 09.12.2014
 * Time: 14:22
 */

class Controller_404 extends Controller
{
    function action_index()
    {
        $this->view->generate('404_view.php', 'template_view.php');
    }
}
