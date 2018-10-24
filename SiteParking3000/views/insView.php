<?php include "headerView.php"; ?>

<h1>Inscription</h1>
   
    <form action="#" method="post" enctype="multipart/form-data">
        <p>
            <input type="text" name="nom" placeholder="Nom..." required/>
            <br/>
            
            <input type="text" name="email" placeholder="Email..." required/>
            <br/>
    
            <input type="password" name="password" placeholder="mot de passe..." required/>
            <br/>
            
            <input type="password" name="re-password" placeholder="Password..." required>
            
            
            <input type="submit" name="submit" />
            <br/> 
        </p>
    </form>

<?php include "footerView.php"; ?>
