<?php

ob_start();//permet de suspendre l'affichage


        if(!isset($_GET['p']))
        {
            $page = "accueil;
            
            
        }

        else
        {
            if(!file_exists("controllers/".$_GET['p']."Controller.php"))
                $page = "404";
            else
                $page = $_GET['p'];
               
        }


        include "controllers/".$page."Controller.php";
        $content = ob_get_contents();

    

ob_end_clean();
	
	include "layout.php";
?>