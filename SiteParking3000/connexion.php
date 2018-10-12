<?php
session_start();

function bddConnection(){
    try
    {
        require "config.php" ;   
    }
    catch(Exeption $e)
    {
        die("bdd non trouvée");
    }
}

include "index.php";