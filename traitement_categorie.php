<?php
include 'includes/config.php';
include 'includes/menu.php';


if (isset($_POST['titre'])) {
    /* s'ils sont remplis je recupere les donnees */
    $titre = $_POST['titre'];
    /* ma requete */
    $sql = "INSERT INTO categories (nom_categorie) VALUES ('$titre')";
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
