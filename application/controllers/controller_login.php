<?php
/**
 * Created by PhpStorm.
 * User: WispProxy
 * Date: 09.12.2014
 * Time: 14:29
 */

class Controller_Login extends Controller
{
    function action_index()
    {
        if(isset($_POST['login']) && isset($_POST['password']))
        {
            $login      =   $_POST['login'];
            $password   =   $_POST['password'];

            /*
             * Emulation  user session, without hash.
             * Attention: Not safe!
             */
            if($login == 'admin' && $password == 'passw@rdZ!')
            {
                $data["login_status"] = "access_granted";

                session_start();

                /*
                 * Emulation session
                 */
                echo $_SESSION['admin'];

                $_SESSION['admin'] = $password;
                header('Location: /admin');
            }
            else
            {
                $data["login_status"] = "access_denied";
            }
        }
        else
        {
            $data["login_status"] = "";
        }

        $this->view->generate('login_view.php', 'template_view.php', $data);
    }
}
