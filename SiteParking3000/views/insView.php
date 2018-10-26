
<?php include "headerView.php"; ?>

<hgroup>
    <h1>Parking 3000</h1>
    <h3>Acces a votre compte</h3>
</hgroup>
<link rel="stylesheet" href="../publics/css/styleLogin.css">


<?php
if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $mdp = sha1($_POST['mdp']);

    $requete = $bdd->query("INSERT INTO user(password,email) VALUES('".$email."','".$password."'");
    $_SESSION['connecte'] = true;
    $_SESSION['id'] = $bdd->lastInsertId();
    $_SESSION['lvl'] = 1;
    mail($email,"Inscription","Bienvenue");
    header("Location:accueilView.php");
}
?>
<form action="#" method="post">
    Email<input type="email" name="email"/>
    mdp<input type="password" name="mdp"/>
    <input type="submit" name="submit"/>
</form>
<h4>vous avez déjà un compte ? <br> connectez-vous ici</h4>
<button type="button" class="button buttonBlue">Connexion
    <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
</button>
</form>

<?php include "footerView.php"; ?>