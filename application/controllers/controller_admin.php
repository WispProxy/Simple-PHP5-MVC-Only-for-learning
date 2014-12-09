<?php
/**
 * Created by PhpStorm.
 * User: WispProxy
 * Date: 09.12.2014
 * Time: 14:24
 */

class Controller_Admin extends Controller
{
    function action_index()
    {
        session_start();

        /*
         * Emulation DataBase user session, without hash.
         * Attention: Not safe!
         */
        if($_SESSION['admin'] == 'passw@rdZ!')
        {
            $this->view->generate('admin_view.php', 'template_view.php');
        }
        else
        {
            session_destroy();
            Route::ErrorPage404();
        }
    }

    function action_logout()
    {
        session_start();
        session_destroy();
        header('Location: /');
    }
}
