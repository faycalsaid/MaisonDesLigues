<?php

require 'model/loginManagingModel/loginModel.php';

/* Login session
 * Her can test the login user if we have connetion exist we test him.
 * Or if login 
 */
$msg_error = "";

if (isset($_GET['menu'])) {
    if ($_GET['menu'] == "DISCONNECT") {

        // Delete all session created
        $_SESSION = array();
        session_destroy();
    
        header('Location: ?menu=LOGIN');
    
    }
    elseif($_SERVER['REQUEST_METHOD'] == 'POST'){
    
        if (verifLogin(htmlspecialchars($_POST['login']), htmlspecialchars($_POST['passwd']))) {
            header('Location: ?menu=USER');
        }
        else{
            header('Location: ?menu=LOGIN');
        }
    }
    elseif(isset($_SESSION['login']) && isset($_SESSION['password'])){
        if (verifLogin(htmlspecialchars($_SESSION['login']), htmlspecialchars($_SESSION['password']))) {
            header('Location: ');
        }
    }
    else{
        require 'vue/loginManaging/loginView.php';
    }
}


