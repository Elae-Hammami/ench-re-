
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Enchére TN</title>
  <link rel="stylesheet" href="style1. css">
</head>
    <body>
      <!--navbar de la page -->
     <!-- <nav class="navbar navbar-expand-lg bg-body-tertiary">-->
      <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <img src="logo.jpg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Enchére TN</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" ></span>
    </button>
 
    <div class="collapse navbar-collapse" id="navbarScroll" style="padding-left: 20px;" >
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#" style="margin: 10px;">Home</a>
        </li>
      <a href="#" id="categorie-link"  style="text-decoration: none; color: white; padding-top: 18px;">Catégories</a>
        <form class="d-flex" role="search" style="padding-top: 10px;  padding-left: 250px; width:800px;margin-right: 20px;">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      
        <li class="nav-item" style="margin: 20px; margin-left: 200px; color: white;">
         <a href="accueil.html" >Déconnection</a>
        </li>
      </ul> 
     
    </div>
  </div>
</nav>
<br>
<br>
<br>

<div id="modal" class="modal" style="content: '';
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    backdrop-filter: blur(10px); 
    z-index: 1040;">
<div class="modal-dialog modal-xl ">
    <div class="modal-content">
    <div class="modal-header">
    
        <h5 class="modal-title" >Catégories </h5>
      <div class="modal-content">
    
                
  <div>     
<img src="montre.png" alt="Archéologie et histoire" height="150px" width="170px" style="border-radius: 20px;"><a href="#"></a>
<img src="art.png" alt="Archéologie et histoire" height="150px" width="170px" style="border-radius: 20px;"><a href="#"></a>
<img src="artas.png" alt="Archéologie et histoire" height="150px" width="170px" style="border-radius: 20px;"><a href="#"></a>
<img src="bijoux.png" alt="Archéologie et histoire" height="150px" width="170px" style="border-radius: 20px;"><a href="#"></a>
</div><div>
<img src="artas.png" alt="Archéologie et histoire" height="150px" width="170px" style="border-radius: 20px;"><a href="#"></a>
<img src="catawiki.png" alt="Archéologie et histoire" height="150px" width="170px" style="border-radius: 20px;"><a href="#"></a>
<img src="bijoux.png" alt="Archéologie et histoire" height="150px" width="170px" style="border-radius: 20px;"><a href="#"></a>
</div>
</div>        
</div>
<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button></div>
</div>    
</div>
</div>
<script src="script.js"></script>
<!--le contenue de la page -->
<div style="margin: 70pxs;padding-left: 250px;">
<button type="button" class="btn btn-outline-secondary"><a href=""> Art </a></button>
<button type="button" class="btn btn-outline-secondary">Intérrieurs</button>
<button type="button" class="btn btn-outline-success">Livre et bande dessiinées</button>
<button type="button" class="btn btn-outline-danger">Bijoux</button>
<button type="button" class="btn btn-outline-info">Montres </button>
<button type="button" class="btn btn-outline-primary">Jouets et modélisme  </button>
<button type="button" class="btn btn-outline-dark">Art asiatique et tribal  </button>


</div>

<div id="carouselExample" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="affiche.png" class="d-block w-100" alt="..." height="500px">
      <div class="carousel-caption">
        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#myModal" >
          cliquer ici 
        </button>
      </div>
    </div>
    <div class="carousel-item">
      <img src="image1.png" class="d-block w-100" alt="..." height="500px">
      </div>
      <div class="carousel-item">
      <img src="image2.png" class="d-block w-100" alt="..." height="500px">
   
      </div>

    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div style="margin: 30px;">
    <div class="card text-center">
        
        <div class="card-body">
          <h5 class="card-title">ajoutez votre produit</h5>
          <p class="card-text">cliquez sur le bouton pour ajoutez votre produit</p>
          <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#myModal" >
          add product
        </button>
        </div>
        
      </div>
      
</div>

<!--modal pour l'ajout de produit -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container mt-5">
          <h2>Add a New Product</h2>
      
          <form action="process_form.php" method="post" enctype="multipart/form-data">
            <!-- Product Name -->
            <div class="mb-3">
              <label for="productName" class="form-label">Product Name:</label>
              <input type="text" class="form-control" id="productName" name="productName" required>
            </div>
      
            <!-- Product Description -->
            <div class="mb-3">
              <label for="productDescription" class="form-label">Product Description:</label>
              <textarea class="form-control" id="productDescription" name="productDescription" required></textarea>
            </div>
      
            <!-- Product Price -->
            <div class="mb-3">
              <label for="productPrice" class="form-label">Product Price:</label>
              <input type="number" class="form-control" id="productPrice" name="productPrice" step="0.01" required>
            </div>
      
            <!-- Product Photo -->
            <div class="mb-3">
              <label for="productPhoto" class="form-label">Product Photo:</label>
              <input type="file" class="form-control" id="productPhoto" name="productPhoto" accept="image/*" required>
            </div>
            <div class="mb-3">
              <label for="uploadTime" class="form-label">time:</label>
              <input type="datetime-local" class="form-control" id="uploadTime" name="uploadTime" >
            </div>
            <div class="col-md-4" style="margin:10px">
                    <label for="selectedOption" class="form-label">catégorie</label>
                    <select id="selectedOption" name="selectedOption"class="form-select" >
                      <option selected>Choisir...</option>
            <option>Art</option>
            <option>montres</option>
            <option>intérieur</option>
            <option>Livres et bandes dessinées</option>
            <option>Bijoux</option>
            <option>jouets et modelisme</option>
            <option>art artistique et tribal</option>
            <option>autre </option>
          
</select>
</div>
 
            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Submit</button>
          
          </form>
        </div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>
  <!-- Display Added Products -->
  <div class="mt-5">
    <h3>Added Products</h3>
    <?php include 'display_products.php'; ?>
  </div>
</div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
