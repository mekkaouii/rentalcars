<?php

session_start();

if(!$_SESSION['username']){   
header("Location: login.php");
} 
require("../config/commandes.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">About</h4>
          <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo reprehenderit dolorum culpa, officiis inventore commodi aperiam dolor ducimus ea? </p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">MENU</h4>
          <ul class="list-unstyled">
            <li><a href="index_admin.php" class="text-white">HOME</a></li>
            <li><a href="delete.php" class="text-white">Delete car</a></li>
            
          </ul>
        </div>
      </div>
    </div>
  </div>
  
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="index_admin.php" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
        <strong>RentalCars</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>
    
<div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3"> </div>
<form method= "post">
<div class="mb-3">
    <label for="Inputimage1" class="form-label">the picture link</label>
    <input type="name" class="form-control" name="image" required>
  </div>

  <div class="mb-3">
    <label for="InputBrand1" class="form-label">Brand</label>
    <input type="text" class="form-control" name="brand" required>
  </div>

  <div class="mb-3">
    <label for="Inputprice1" class="form-label">price</label>
    <input type="number" class="form-control" name="price" required>
  </div>

  <div class="mb-3">
    <label for="Inputdesc1" class="form-label">description</label>
    <textarea class="form-control" name="desc" required ></textarea>
  </div>
  
  
  <button type="submit"  name="valide" class="btn btn-primary">ADD</button>
</form>

</div>
</div>
</div>

</body>
</html>

<?php

if(isset($_POST['valide']))
{
    if(isset($_POST['image']) AND isset($_POST['brand']) AND isset($_POST['price']) AND isset($_POST['desc']) )
    {
        if(!empty($_POST['image']) AND !empty($_POST['brand']) AND !empty($_POST['price']) AND !empty($_POST['desc']) )
        {
            $image = htmlspecialchars(strip_tags($_POST['image']));
            $brand = htmlspecialchars(strip_tags($_POST['brand']));
            $price = htmlspecialchars(strip_tags($_POST['price']));
            $desc = htmlspecialchars(strip_tags($_POST['desc']));


            try {
                add($image, $brand, $price, $desc);
            } 
            catch (exception $e) {
                $e->getMessage();
            }
           
          

        }
    }
}

?>