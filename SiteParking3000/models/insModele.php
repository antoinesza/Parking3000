<?php

    if(isset($_POST['submit']))
	{
        
    function add_user($nom, $email, $password, $lvl, $statutfile)
    {
        require 'config.php';
		
		$requete = $bdd->query("INSERT INTO users(nom, email , password, lvl, statutfile ) VALUES (:nom, :email, :passeword, :lvl, :statutfile)");
        $requete->binValue(":nom",$nom,PDO::PARAM_STR);
        $requete->binValue(":email",$email,PDO::PARAM_INT);
        $requete->binValue(":password",sha1($mdp),PDO::PARAM_STR);
        $requete->binValue(":lvl",$lvl,PDO::PARAM_INT);
        $requete->binValue(":statutfile",$statut,PDO::PARAM_boolean);
        $requete->execute();
        
        $add_user = $requete->execute();
        return $add_user;
        
        header("location:login");
		
	}
        