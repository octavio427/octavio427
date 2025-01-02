
<?php
 session_start();

 include ("creation.php");

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="footer.css">
</head>

<body>

<!-- menu navigation -->

<?php require_once(__DIR__ . '/nav.php'); ?>

<!-- header et suite -->
<header class="header">

    <div class="fondheader">

        <?php for($i = 0; $i < count($produits) ; $i ++) { ?>
            <div class="whitebloc"> <!--block1 blanc articles -->

                <!--image article-->
                <img class= "image" src="<?php echo $produits[$i]["image"]; ?>" alt="article parfum" style="width: 250px;height: 250px;">
                
                <div class="colone">
                    <!-- nom produit -->
                    <h3>  <?php echo $produits[$i]["nom"]; ?></h3>
                        <p class= "genre"><?php echo $produits[$i]["genre"]; ?>  
                        </p>
                            <!-- Prix produit -->
                            <p class="price">Prix  <?php echo $produits[$i]["prix"]; ?>
                            </p>
                                <!--bouton "vos produits" vers >>> article-->
                                <a href="articles.php" style="text-decoration: none;">
                                    <button class= "boutonarticle1" type="bouton">Voir le produit</button>
                                </a>
                </div>
            </div>
        <?php } ?>

    </div>
</header>


<!-- footer -->
<?php include("footer.php"); ?>

</body>
</html>