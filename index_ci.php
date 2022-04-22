<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <title>menu page acceuil</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <div class="container-fluid">
        <?php include_once("headerX.php");?>
    </div>
    <div class="container-me">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h5>A NOS CLIENTS</h5>
                        </div>
                        <img src="img/riz.jpg" alt="riz">
                        <div class="card-text"><p>Nous vendons des repars saine et equilibré pour votre santé</br> Avec MyHealth votre
                            Santé est notre priorité</p></div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h5>Acheter partout</h5>
                        </div>
                        <img src="img/photonique.jpg" alt="riz">
                        <div class="card-text"><p>Acheter partout avec notre application ou site web, nous some disponible tout les jours
                            ,faites vos commandes et on vous livre.
                        </p></div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h5>Ecoulés vos produits avec MyHealth</h5>
                        </div>
                        <img src="img/boutique.jpg" alt="riz">
                        <div class="card-text"><p>Avec MyHealth vous pouvez vendre vos nourriture en vous inscrivant sur notre plateformes</p></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
            <?php include_once("index_produit.php");?>

    
</body>
</html>