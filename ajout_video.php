<?php

include 'includes/menu.php';


?>

<div class="container">

    <div class="row">
        <div class="col-md-6 col-md-offset-2">
            <br><h1>Ajout d'une vidéo</h1><br>

        </div>
    </div>
    <!---------------   row------------------------------------------------->
    <div class="row">
        <!---------------   col------------------------------------------------->
        <div class="col-md-6">
            <form method="post" action="traitement_video.php">

                <div class="form-group">
                    <label for="titre">Titre:</label>
                    <input type="text" class="form-control" name="titre" id="titre">
                </div>
                <div class="form-group">
                    <label for="lien">Lien:</label>
                    <input type="text" class="form-control" name="lien" id="lien">
                </div>
                <div class="form-group">
                    <label for="date">Date:</label>
                    <input type="date" class="form-control" name="date" id="date">
                </div>

                <div class="form-group">
                    <label for="categorie">Catégorie:</label>
                    <select name="categorie">
                        <option value="meme">Meme</option>
                        <option value="sports">Sports</option>
                    </select>
                    <input type="text" name="categorie" id="categorie">
                </div>

                <input type="submit" class="form-control" value="Envoyer">
            </form>

        </div>
        <!---------------   end col------------------------------------------------->

    </div>
    <!---------------  end row------------------------------------------------->



</div>
