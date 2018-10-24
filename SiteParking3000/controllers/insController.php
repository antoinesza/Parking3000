<?php
    require "/models/insModel.php";
      //On appelle la fonction add_user qui insert un nouvelle utilsateur en bdd
      add_user();

      // On redirige l'utilisateur sur la page login.php
      header('Location:login');


    require "/views/insView.php";
     