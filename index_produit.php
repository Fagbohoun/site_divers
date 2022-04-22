<?php
    include_once('pdo.php');
    $prepare_rq=$connect_db->prepare(" SELECT *FROM table_commande");
    $prepare_rq->execute();
    $table_general=$prepare_rq->fetchAll();

    
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index_prod.css">
    <title>Document</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   

<div class="container mt-3" >
            <div class="row" <?php foreach( $table_general as $table ):?>>
            <div class="col-lg-3 col-md-3 col-sm-12 col-12"  >
                    <div class="card strethed-link">
                        <div class="card-top-img">
                        <?php echo " <img style='width: 305px;' src='./upload/". $table['images']."'>";?>
                        </div>
                        <div class="card-body bg-info">
                            <div class="card-title text-secondary"><h5><?php echo $table['Names'];?></h5>
                        </div>
                        </div>
                        <div class="card-text ">
                          
            </br>
                            <?php echo "Prix: ". $table['price'] ." FCFA";?></br>
                                <button type="submit" class="btn btn-success pr3 mt-1">Acheter</button>
                        </div>
                    </div  >
                </div <?php endforeach;?>>

            </div>
               
 </div>
        
       
</body>
</html>