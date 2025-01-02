
<!-- creation.php -->

<!-- Exemple de connexion à une base de données (à ajuster selon vos besoins)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "parfumerie";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Définir le mode d'erreur PDO sur Exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion réussie"; 
} catch(PDOException $e) {
    echo "Erreur de connexion: " . $e->getMessage();
}
/*?> -->



<?php

$produits = array(
    array(
        "id" => 1,
        "nom" => "drakkar",
        "genre" => "parfum homme",
        "quantites" => "250",
        "alcool" => "10",
        "couleur" => "pourpre",
        "createur" => "franck",
        
        "image" => "http://localhost/projetparfum_mysql/photo/pourpre.jpg",
        
        "prix" => "60 €",

    ), array(
        "id" => 2,
        "nom" => "love",
        "genre" => "parfum femme",
        "quantites" => "2300",
        "alcool" => "5",
        "couleur" => "jaune",
        "createur" => "franck",
        
        "image" => "http://localhost/projetparfum_mysql/photo/jaune.jpg",
        
        "prix" => "80 €",
        
    ), array(
        "id" => 3,
        "nom" => "puissance",
        "genre" => "parfum homme",
        "quantites" => "350",
        "alcool" => "15",
        "couleur" => "bleu",
        "createur" => "sophie",
        


        "image" => "http://localhost/projetparfum_mysql/photo/bleu.jpg",
        
        "prix" => "99 €",

    ), array(
        "id" => 4,
        "nom" => "folie",
        "genre" => "parfum femme",
        "quantites" => "200",
        "alcool" => "12",
        "couleur" => "noire",
        "createur" => "sophie",
       
        "image" => "http://localhost/projetparfum_mysql/photo/noire.jpg",
        
        "prix" => "110 €",

    ), array(
        "id" => 5,
        "nom" => "extreme",
        "genre" => "parfum homme",
        "quantites" => "300",
        "alcool" => "13",
        "couleur" => "blanc",
        "createur" => "franck",
        
        "image" => "http://localhost/projetparfum_mysql/photo/blanc.jpg",
        
        "prix" => "69 €",

    ), array(
        "id" => 6,
        "nom" => "champagne",
        "genre" => "parfum homme",
        "quantites" => "250",
        "alcool" => "15",
        "couleur" => "brun",
        "createur" => "franck",
    
        "image" => "http://localhost/projetparfum_mysql/photo/brun.jpg",
        
        "prix" => "89 €",

    ), array(
        "id" => 7,
        "nom" => "lune",
        "genre" => "parfum femme",
        "quantites" => "500",
        "alcool" => "17",
        "couleur" => "blanc",
        "createur" => "sophie",
       
        "image" => "http://localhost/projetparfum_mysql/photo/blanc.jpg",
        
        "prix" => "79 €",

    ), array(
        "id" => 8,
        "nom" => "dragon",
        "genre" => "parfum homme",
        "quantites" => "450",
        "alcool" => "15",
        "couleur" => "rouge",
        "createur" => "franck",
       
        "image" => "http://localhost/projetparfum_mysql/photo/rouge.jpg",
        
        "prix" => "119 €",

    ), array(
        "id" => 9,
        "nom" => "rose",
        "genre" => "parfum femme",
        "quantites" => "250",
        "alcool" => "10",
        "couleur" => "rose",
        "createur" => "sophie",
       
        "image" => "http://localhost/projetparfum_mysql/photo/rose.jpg",
        
        "prix" => "69 €",

    ), array(
        "id" => 10,
        "nom" => "mars",
        "genre" => "parfum homme",
        "quantites" => "450",
        "alcool" => "18",
        "couleur" => "ocre",
        "createur" => "franck",
       
        "image" => "http://localhost/projetparfum_mysql/photo/ocre.jpg",
        
        "prix" => "88 €",
    
    ),
    
    /* array(
        "id" => 10,
        "name" => "mars",
        "genre" => "parfum homme",
        "quantites" => "450",
        "alcool" => "18",
        "couleur" => "ocre",
        "createur" => "franck",
       
        "image" => "http://localhost/projetparfum_mysql/photo/ocre.jpg",
        
        "price" => "88 €",
    
    ),*/

);
?>