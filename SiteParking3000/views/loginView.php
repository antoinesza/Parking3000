<?php include "headerView.php"; ?>


    <hgroup>
        <h1>Parking 3000</h1>
        <h3>Acces a votre compte</h3>
    </hgroup>
    <link rel="stylesheet" href="../publics/css/styleLogin.css">
    <form>
        <div class="group">
            <input type="text" name='email' id="email"><span class="highlight"></span><span class="bar"></span>
            <label>Email</label>
        </div>
        <div class="group">
            <input type="email" id="password" name='password'><span class="highlight"></span><span class="bar"></span>
            <label>Mot de passe</label>
        </div>
        <button type="button" class="button buttonBlue">Connexion
            <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
        </button>
        <h4>Vous n'avez pas encore de compte ? <br> s'inscrire gratuitement ici</h4>
        <button type="button" class="button buttonBlue">Inscription
            <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
        </button>
    </form>



<?php include "footerView.php"; ?>