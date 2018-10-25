
    <header>
         <a href="accueilView.php">Accueil</a>
        <?php if(isset($_SESSION['connecte']))
        {
            echo"<li><a href='logout.php'>Logout</a></li>";
        }
        else
        {
            echo '<li><a href="login.php"><span><font>Login</font></span></a></li>';

        }
        ?>

        <li><a href="inscription.php"><span><font>Inscription</font></span></a></li>


         <a href="adminView.php">Admin</a> <br/>
    </header>
