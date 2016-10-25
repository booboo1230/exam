<?php

include 'menu.php';
?>

<div class="container">

    <h1>Connexion admin</h1><br>

    <div class="row">
        <div class="col-md-6">
            <form method="post" action="connexion_admin.php">

                <div class="form-group">
                    <label for="email">E mail:</label>
                    <input type="text" class="form-control" name="email" id="email">
                </div>
                <div class="form-group">
                    <label for="prenom">Mot de passe:</label>
                    <input type="password" class="form-control" name="mdp" id="mdp">
                </div>

                <input type="submit" class="form-control" value="Envoyer">
            </form>
        </div>
    </div>





</div>
