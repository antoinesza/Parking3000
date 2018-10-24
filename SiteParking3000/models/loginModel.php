<?php
     if(isset($_POST['submit']));//si formulaire validé
         
         function login_user($password, $email){
         
            $requete=$bdd->prepare("SELECT * FROM users WHERE password= ?' AND email= ?' ");
            $requete ->execute(array($password, $email))
	       if($login_user=$requete->fetch())
            {
                $_SESSION['connect']=true;
                $_SESSION['id_u']=$reponse['id_u'];
               
                return $login_user;
               
                header("location:acceuil");//redirection
            }
            else
                {
                    echo"<p class='red'>Adress mail ou mot de passe incorrect</p>";
                }
            }
?>