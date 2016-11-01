<?php
include 'includes/menu.php';
include 'includes/config.php';


if (isset($_POST['titre'])  && ($_POST['lien']) && ($_POST['date']) && ($_POST['categorie'])) {
/* s'ils sont remplis je recupere les donnees */
$titre = $_POST['titre'];
$lien = $_POST['lien'];
    $date = $_POST['date'];
    $categorie = $_POST['categorie'];
/* ma requete */
$sql = "INSERT INTO videos (categories_id_categorie, lien, date, titre) VALUES ('$categorie','$lien','$date','$titre')";
/*envoi de la requete*/
mysqli_query($conn, $sql);

    header('Location: success.php');



}
/* sinon y'a une erreur */
else {
echo "Erreur:" . $sql . "<br>" . mysqli_error($conn);
mysqli_close($conn);
}



/* et ça c'est la balise pour fermer le php mdr*/

?>

