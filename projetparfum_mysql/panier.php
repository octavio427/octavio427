<?php
session_start();

include ("creation.php");


    $total= 0;
    //$_SESSION ["panier"] = array (0,1,2,3,4);
    $_SESSION ["panier"] = array (count($produits));

    $panier = $_SESSION ["panier"];
    
$nmbrarticle=count($produits);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>panier</title>
    <link rel="stylesheet" href="panier.css">
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="fond.css">
</head>
<body>
    
<?php require_once(__DIR__ . '/nav.php'); ?> 


<Section>
<h2 class= "articles1" >PANIER</h2>
</Section>

<?php for ($i=0;$i<$nmbrarticle;$i=$i+1){ ?>
<?php } ?>

<?php require_once(__DIR__ . '/fond.php'); ?>
<section>

    <div class="Panier">
        <div class= "pan">
            <h3>Votre panier</h3>

        </div>
            <a href="#">Désélectionner tous les éléments</a>

            <?php 
            
            foreach ($_SESSION ['panier'] as $articleId) {
                
                $article = $produits[$articleId];
                $subtotal = $article ['prix'];
                $total = $total + $subtotal; 

            ?>

                <div class= "article">
                    <tr>
                    <td><?= $article ['nom'];?><td>
                    <br>
                    <td>Prix:<?=$subtotal ;?>€</td>
                    </tr>

                </div>
        
        <?php } 

            echo 'Total : ' .$total. 'Euros';
       
        ?>

    </section>



<?php require_once(__DIR__ . '/footer.php'); ?>

</body>
</html>