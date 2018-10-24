<?php include "headerView.php"; ?>

    <hgroup>
        <h1>Parking 3000</h1>
        <h3>Connexion</h3>
    </hgroup>
    <link rel="stylesheet" href="../publics/css/styleLogin.css">
    <form>
        <div class="group">
            <input type="text" name='email' id="email"><span class="highlight"></span><span class="bar"></span>
            <label>Identifiant</label>
        </div>
        <div class="group">
            <input type="email" id="password" name='password'><span class="highlight"></span><span class="bar"></span>
            <label>Mot de passe</label>
        </div>
        <button type="button" class="button buttonBlue">Subscribe
            <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
        </button>
        <button type="button" class="button buttonBlue">Subscribe
            <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
        </button>
    </form>



<?php include "footerView.php"; ?>