<?php
    $nom=$_POST['votre_nom'];
    $prenom=$_POST['votre_prenom'];
    $email=$_POST['votre_email'];
    $tel=$_POST['num'];
    $pass=$_POST['votre_passe'];
    
    try
    {
        $connect_db =new PDO ('mysql:host=localhost; dbname=commerciale_db', 'root', 'root');
           $connect_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          
    }
    catch (PDOEXECEPTION $e) {
        die( "base de donnée non connectée:" .$e->getMessage() );

    }
    if( isset($nom) AND isset($prenom) AND isset($email) AND filter_var($email, FILTER_VALIDATE_EMAIL )AND isset($pass))
    {
        $message_erreur="Le emails existe deja connecté sur avec le boutton connection";
        $sql_select= " SELECT emails FROM clients ";
        $select= $connect_db->prepare($sql_select);
        $isOK=$select->execute();
        $values_db=$select->fetchAll();
        
    foreach($values_db as $my_values)
        {
            if($my_values['emails']===$_POST['votre_email'])
            {
                
                return header("Location:inscription_return.php");
            }
            
        }                
    }
    
    if( isset($nom) AND isset($prenom) AND isset($email) AND filter_var($email, FILTER_VALIDATE_EMAIL )AND isset($pass))
    {
        $prepre_db= $connect_db->prepare( 'INSERT INTO clients  VALUES (NULL, :nom, :prenom, :mail, :tel, :passwords)');
        $prepre_db-> bindValue('nom', $nom, PDO::PARAM_STR);
        $prepre_db-> bindValue('prenom', $prenom, PDO::PARAM_STR);
        $prepre_db-> bindValue('mail', $email, PDO::PARAM_STR);
        $prepre_db-> bindValue('tel', $tel, PDO::PARAM_INT);
        $prepre_db-> bindValue('passwords', password_hash($pass, PASSWORD_DEFAULT) , PDO::PARAM_STR);
        $validate_confirm= $prepre_db->execute();

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
        
                    
<?php if(isset($validate_confirm)):?>
                    <?php include_once( "index.php" );?>
                        <?php endif;?>
                        <?php if(!isset($validate_confirm)):?>
                    <?php include_once( "inscription.php" );?>
                        <?php endif;?>
            
                        
</body>
</html>
