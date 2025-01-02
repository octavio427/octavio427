<?php

session_start();

include ("creation.php");

$id= $_GET ["choix"] ?? 0;

$article=array();

//$produits= array ();
// for ( $i = 0 ; count ($produits)-1; $i++) 
for($i = 0; $i < count($produits) ; $i ++)
// $i=$i+1
{

if ($produits [$i] ["id"]==$id){
$article = $produits[$i];
break;
}

}

$name = $article["nom"];
$image = $article["image"];
$price = $article["prix"];     
$genre = $article["genre"];
$quantites = $article["quantites"];
$alcool = $article ["alcool"];
$couleur = $article["couleur"];
$createur = $article["createur"];


// $miniature1 = $article["miniature1"];
// $miniature2 = $article["miniature2"];
// $petitoverview = $article["petitoverview"];
// $overview = $article["overview"];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>articles</title>
    <link rel="stylesheet" href="articles.css">
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="fond.css">
</head>

<body>

<!-- menu nav -->
<?php require_once(__DIR__ . '/nav.php'); ?>

    <Section>
    <h2 class= "articles" >ARTICLES</h2>
    </Section>

        <section>
            <?php require_once(__DIR__ . '/fond.php'); ?>

            <div class="article"> 

                <!-- <div class="row"> -->

                    <div  style="background-color:white;">
                        <?php echo "<img src=".$image." alt=\photo\>";?>

                    </div>

                        <div  style="background-color:white;">
                                
                            <div style="background-color:white;">
                                <?php echo $name ;?>
                            </div>

                            <!-- <div style="background-color:white;"> -->
                                <div>
                                    <!--<?php echo $petitoverview ;?>-->
                                </div>

                                <br/>

                                    <div style="background-color:White;">
                                        <a href="Panier.php?subject="<?php echo $id ?>>
                                            <button> <?php echo "ACHETER"."<br/>";?> 
                                            </button></a>
                                    </div>

                        </div>
                
                <!-- </div> -->

            </div>

        </section>


<?php require_once(__DIR__ . '/footer.php'); ?>
</body>
</html>