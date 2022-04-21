
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="incription.css">
       <title>inscription</title>
    </head>
    <body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
            <div class="container">
                <div class="row" >
                    <div class="col-6 w-75% " id="form_id">
                        <h4>Connectez-Vous:</h4>
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
    </body>
    </html>

