<?php


    if(isset($_POST['submit']))
    {
        $password = sha1($_POST['password']);
        $email = ($_POST['email']);
        $lvl = 1;
        $statutfile = 0;

        login_user ($password, $email);
    }
require "/models/loginModele.php";
require "/views/loginView.php";
?>