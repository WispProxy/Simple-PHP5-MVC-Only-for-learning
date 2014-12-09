<?php
/**
 * Created by PhpStorm.
 * User: WispProxy
 * Date: 09.12.2014
 * Time: 14:42
 */
?>
<h1>Login Page</h1>

<?php
    /*
     * Start not beautiful code for return alert.
     * This only for test!
     */
    extract($data);
    if($login_status == "access_granted")
    {
?>
    <p class="alert alert-success">
        Authorization successful.
    </p>
<?php
    }
    elseif($login_status=="access_denied")
    {
?>
    <p class="alert alert-danger">
        Login or password is incorrect.
    </p>
<?php
    }
?>

<form class="form-signin" role="form" method="post">
    <h5 class="form-signin-heading">Please sign in</h5>
    <label class="sr-only" for="inputLogin">Login</label>
        <input id="inputLogin" class="form-control" type="login" autofocus="" required="" placeholder="Login" name="login">
    <label class="sr-only" for="inputPassword">Password</label>
        <input id="inputPassword" class="form-control" type="password" required="" placeholder="Password" name="password">
    <button class="btn btn-default btn-block" type="submit" value="Login">Sign in</button>
</form>
