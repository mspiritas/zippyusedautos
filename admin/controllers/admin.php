<?php
switch($action) {
    case 'logout':
        $_SESSION = array();
        session_destroy();
        $login_message = 'You have logged out.';
        include('view/login.php');
        break;
    case 'show_register':
        include('view/register.php');
        break;
    case 'show_login':
        include('view/login.php');
        break;    
    case 'login':
        is_valid_login($username, $password);
        if(is_valid_login($username, $password)) {
            $_SESSION['is_valid_login'] = true;
            session_start();
            header("Location: .?action=list_vehicles");
        } else {
            $login_message = 'Please login to view this page.';
            include('view/login.php');
        }
        break;
    case 'register':
        include('util/valid_register.php');
        valid_registration($username, $password, $confirm_password);
        if($errors) {
            include('view/register.php');
        } else {
            add_admin();
            $_SESSION['is_valid_admin'] = true;
            session_start();
            header("Location: .?action=list_vehicles");
        }
        break;
}