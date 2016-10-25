<?php

include 'includes/config.php';


if (isset($_POST['pseudo'])  && ($_POST['email']) && ($_POST['mdp'])) {
/* s'ils sont remplis je recupere les donnees */
$pseudo = $_POST['pseudo'];
$email = $_POST['email'];
$mdp = $_POST['mdp'];
/* ma requete */
$sql = "INSERT INTO utilisateurs (nom_utilisateur, email_utilisateur, mdp_utilisateur) VALUES ('$pseudo','$email','$mdp')";
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
