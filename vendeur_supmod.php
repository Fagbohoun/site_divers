<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <form action="vendeur_valide.php" method="POST" enctype="multipart/form-data" style=" width:467px; margin:auto; ">
            <h3 class="text-info"> Devenir vendeur </h3>
            <div class="form-group">
            <label for="">Fournisseur ou restaurant</label>
            <input type="text" name="resto_name" id="resto" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Prix:</label>
                <input type="number" name="price" id="price" class="form-control">
            </div>
    
            <div class="group-form">
                <label>Image:</label>
                 <input type="file" name="imageFile" id="file" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Explication</label>
                <textarea name="comment" id="comment" cols="15" rows="15" placeholder="detaillé votre service ici" class="form-control"></textarea>
            </div>

           <div class="form-group">
           <button class="btn btn-warning mt-2" type="submit" >Modification</button>
            <button class="btn btn-danger mt-2" type="submit" >Supprimer</button>
           </div>

        </form>
</body>

</html>