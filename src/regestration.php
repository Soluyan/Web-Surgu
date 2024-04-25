<?php

if(isset($_POST['login_btn'])){
    $user = R::findOne('users', 'login = ?', array($_POST['login_field']));
    if($user){
        if(password_verify($_POST['password_field'], $user ->password)){
            $_SESSION['login_field'] = $user;
            header(location: ../../index.html);
        }
    }
    $version = ;
}


?>