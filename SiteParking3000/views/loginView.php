<?php include "headerView.php"; ?>

<form class="form-signin" method="post">
            <h1 class="h3 mb-3 font-weight-normal">Connection</h1>
            <label for="email" class="sr-only">Email</label>
            <input type="text"  name='email' id="email" class="form-control" placeholder="Email" required autofocus>
            <label for="mdp" class="sr-only">Password</label>
            <input type="password" id="password" name='password' class="form-control" placeholder="Password" required>
            
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Connexion</button>
    </form>

<?php include "footerView.php"; ?>