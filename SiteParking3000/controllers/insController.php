<?php
    require "/models/inslModel.php";

        if(isset($_POST['submit']))
        {
            $login = $_POST['login'];
            $password = sha1($_POST['password']);
            $email = ($_POST['email']);
            

            add_user($login, $passeword, $email);
        }

    require "/views/inslView.php";
     