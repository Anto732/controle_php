<?php



if (isset($_POST)) {
    var_dump($_POST);

}
// isset - Détermine si ma variable post créée dans le html est déclarée et est différente de null
// var dump - affiche les informations de ma variable post

$tache = $_POST['tache'];
// création variable tache

$description = $_POST['description'];
// création variable description

$tableau = [];
// création de mon tableau vide pour qu'il s'affiche

$tableau[$tache] = $description;
// je peux maintenant faire mon tableau associatif, la variable tache est associée à la variable description

if(empty($_POST["tache"]) && empty($_POST["description"]))
  echo "Vous n'avez pas rempli tous les champs";

  // si la case tache et la case description sont vides, alors afficher message "vous n'avez pas rempli tous les champs"


// ce weekend et cette semaine j'ai essayé par des recherches de stocker les valeurs du tableau et d'en afficher le résultat, sans succès pour l'instant...

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST">
        <!-- method post me permettra d'appeler le formulaire dans mon code php plus haut//-->


    <label for="tache">tache :</label> 
    <input type="text" name="tache" placeholder="Entrez votre tache">

    <label for="description">description :</label> 
    <input type="text" name="description" placeholder="Entrer votre description">

    <input type="submit" value = "Envoyer">

    
    <!-- création formulaire avec des balises label,pour chaque case on donne la nature des caractères à écrire(le texte),le nom de la case
    ainsi que la fonction placeholder permettant d'écrire dedans  //-->
    
</body>
</html>
