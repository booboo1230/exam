<?php

include 'includes/config.php';
include 'includes/menu.php';




?>

<div class="row">
    <div class="col-md-6 col-md-offset-2">
        <br><h1>Ajout d'une catégorie</h1><br>

    </div>
</div>
<!---------------   row------------------------------------------------->
<div class="row">
    <!---------------   col------------------------------------------------->
    <div class="col-md-12">
        <form method="post" action="traitement_categorie.php">

            <div class="form-group">
                <label for="nom">Nom:</label>
                <input type="text" class="form-control" name="titre" id="nom">
            </div>

            <input type="submit" class="form-control" value="Envoyer">
        </form>

    </div>
    <!---------------   end col------------------------------------------------->

</div>



