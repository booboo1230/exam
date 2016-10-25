<?php
include 'includes/menu.php';
?>


<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-2">
            <br><h1>Inscrivez vous on est bien</h1><br>

        </div>
    </div>


    <div class="row">
        <div class="col-md-5 col-md-offset-2">
            <form method="post" action="adduser.php">

                <div class="form-group">
                    <label for="pseudo">Pseudo:</label>
                    <input type="text" class="form-control" name="pseudo" id="pseudo">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" name="email" id="email">
                </div>
                <div class="form-group">
                    <label for="mdp">Mot de passe:</label>
                    <input type="password" class="form-control" name="mdp" id="mdp">
                </div>

                <input type="submit" class="form-control" value="Envoyer">
            </form>

        </div>
    </div>