<?php
    include_once("pdo.php");
    session_start();
       if ( isset($_POST['votre_email'])  AND filter_var($_POST['votre_email'] , FILTER_VALIDATE_EMAIL) AND isset(  $_POST["votre_passe"]))
        {
        $sql= $connect_db->prepare("SELECT emails, paswd FROM clients");
        $Isok=$sql->execute();
        $answer=$sql->fetchAll();
            if($Isok)
                {
                    foreach($answer as $valeur)
                        {
                            if( $valeur['emails']=== $_POST['votre_email'] )
                                {
                                    $my_passe= $_POST['votre_passe'];
                                    if(password_verify($my_passe, $valeur['paswd']))
                                        {
                                            $user_login= ['email'=> $valeur['emails'], 'passe'=> $valeur['paswd']];

                                        }
                                        else
                                            {
                                                $error_message= sprintf(" Cet email ou password est incorrect");
                                            }
                                
                                }
                        }
                        $_SESSION['LOGGED_USER']=$valeur['emails'];
                        $_SESSION['id']=$valeur['id'];
                }
        }

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Ma page</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        
            <?php if(isset($user_login)):?>
                <?php include_once("index.php");?>
                <?php endif;?>

                <?php if(!isset($user_login)):?>
                    <div class="container">
                <div class="row" >
                    <div class="col-6 w-75% " id="form_id">
                        <h4>Connectez-Vous:</h4>
                        <div class="alert alert-danger">
                            <p> <?php echo "mot de passe ou email incorrect!";?> </p>
                        </div>
                        <form action="connection_valide.php" method="post">
                           
                            <div class="form-group">
                                <label>E-mail:</label>
                                <input type="email" class="form-control" placeholder="Votre email" required name="votre_email">
                            </div>
                           
                            <div class="form-group">
                                <label>Password:</label>
                                <input type="password" name="votre_passe" id="passe" class="form-control" placeholder="mot de passe">
                            </div>
                           <div class="form-group">
                           <button type="submit" class="btn btn-warning">Envoyer</button>
                           <a href="inscription.php">S'incrire?</a>
                           </div>
                        </form>

                    </div>
                </div>

            </div>
                <?php endif;?>
                
</body>
</html>