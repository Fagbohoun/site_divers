
<?php 
include_once("pdo.php");
    if( isset($_FILES['imageFile']))
    {
        $name= $_POST['resto_name'];
        $price= $_POST['price'];
        $comment=$_POST['comment'];
        $file= $_FILES['imageFile'];
        $namefile= $_FILES['imageFile']['name'];
        $filetype= $_FILES['imageFile']['type'];
        $fileerror= $_FILES['imageFile']['error'];
        $file_tmp_name=$_FILES['imageFile']['tmp_name'];
        $fileSize=$_FILES['imageFile']['size'];
        $extension= array( 'jpg', 'png', 'gif', 'jpeg' );
        $fichier_ext= explode('.', $namefile );
        if( in_array( strtolower(end($fichier_ext)), $extension))
{
                if(count($fichier_ext)<=2 )
                    {
                        if( $fileSize<=1000000 AND $fileerror==0)
                            {
                                $img= uniqid(' ', true).".".strtolower(end($fichier_ext));
                                if(move_uploaded_file($file_tmp_name, './upload/'.$img))
                                    {
                                        $restau_name=$_POST['resto_name'];
                                        $commetaire= $_POST['comment'];
                                        $price=$_POST['price'];
                                        if(isset( $restau_name) AND isset($commetaire))
                                            {
                                                $sendFile= $connect_db-> prepare(" INSERT INTO table_commande(Names, price, images, commentaire  ) VALUES (?,?,?,?) ");                                                
                                                $trplt=$sendFile->execute(array($name, $price, $img, $comment));
                                            }else
                                            {
                                                echo "Donnée non envoyée";
                                            }
                                    
                                    }
                                    else
                                    {
                                        echo "echec d'envoie";
                                    }
                            }
                            else
                            {
                                echo "taille non conforme";
                            }
                    }
                    else
                    {
                        echo "veuillez ajouter une image";
                    }
    }else
    {
        echo "Extension du fichier est invalid";
    }
    }

    
   
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
    <?php if(isset($trplt) ):?>
        <?php include_once("produit_ajout.php");?>
        <?php else: echo "echec d'envoie d'image";?>
    <?php endif;?>
    
</body>
</html>
