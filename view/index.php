<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ccmshop</title>

  <link href="css/index.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-grid.min.css" rel="stylesheet">
  <link href="css/bootstrap-reboot.min.css" rel="stylesheet">
  <!-- BOOSTRAP -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- JQUERY -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <!-- TOLTIPS JS -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   
</head>
<body class="bg-gradient-primary">
<?php 
    include "includes/header_principal.php";
    ?>
  <!-- CONTENIDO DE LA PAGINA   -->
<div class="container-fluid">
  <div id="carouselExampleCaptions" class="carousel slide h-100 " data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner justify-content-between">
      <div class="carousel-item active ">
       
        <div class="col-md-12 text-center">
          <h5>First slide label</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <div class="carousel-item ">
       
        <div class="col-md-12 text-center">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-item">
       
        <div class="col-md-12 text-center">
          <h5>Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
    </div>
  
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
  <div class="container mt-1">
      <div class="col-md-7 shadow-sm p-3">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been 
          the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of 
          type and scrambled it to make a type specimen book. It has survived not only five centuries,
           but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised 
           in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently 
           with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
      </div>
      <div class="col-md-5">

      </div>
      <hr>
      <div class="col-md-5">

      </div>
      <div class="col-md-7 shadow-sm p-3">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been 
          the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of 
          type and scrambled it to make a type specimen book. It has survived not only five centuries,
           but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised 
           in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently 
           with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
      </div>
      <hr>
     
       <div class="col-md-7 shadow-sm p-3">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been 
          the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of 
          type and scrambled it to make a type specimen book. It has survived not only five centuries,
           but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised 
           in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently 
           with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
      </div>

      <div class="col-md-5">

      </div>
  </div>

  <!-- FIN DEL CONTENIDO DE LA PAGINA   -->

  <!-- <nav class="site-header sticky-top py-1">
    <div class="container d-flex flex-column flex-md-row justify-content-between">
      <a class="py-2" href="#" aria-label="Product">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24" focusable="false"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
      </a>
      <a class="py-2 d-none d-md-inline-block" href="#">Tour</a>
      <a class="py-2 d-none d-md-inline-block" href="#">Product</a>
      <a class="py-2 d-none d-md-inline-block" href="#">Features</a>
      <a class="py-2 d-none d-md-inline-block" href="#">Enterprise</a>
      <a class="py-2 d-none d-md-inline-block" href="#">Support</a>
      <a class="py-2 d-none d-md-inline-block" href="#">Pricing</a>
      <a class="py-2 d-none d-md-inline-block" href="#">Cart</a>
    </div>
  </nav> -->
  <!-- PIE DE PAGINA   -->
  
  <footer class="container py-5">
    <div class="row">
      <div class="col-12 col-md">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img" viewBox="0 0 24 24" focusable="false"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
        <small class="d-block mb-3 text-muted">&copy; 2017-{{ site.time | date: "%Y" }}</small>
      </div>
      <div class="col-6 col-md">
        <h5>Features</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Cool stuff</a></li>
          <li><a class="text-muted" href="#">Random feature</a></li>
          <li><a class="text-muted" href="#">Team feature</a></li>
          <li><a class="text-muted" href="#">Stuff for developers</a></li>
          <li><a class="text-muted" href="#">Another one</a></li>
          <li><a class="text-muted" href="#">Last time</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Resources</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Resource</a></li>
          <li><a class="text-muted" href="#">Resource name</a></li>
          <li><a class="text-muted" href="#">Another resource</a></li>
          <li><a class="text-muted" href="#">Final resource</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Resources</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Business</a></li>
          <li><a class="text-muted" href="#">Education</a></li>
          <li><a class="text-muted" href="#">Government</a></li>
          <li><a class="text-muted" href="#">Gaming</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>About</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Team</a></li>
          <li><a class="text-muted" href="#">Locations</a></li>
          <li><a class="text-muted" href="#">Privacy</a></li>
          <li><a class="text-muted" href="#">Terms</a></li>
        </ul>
      </div>
    </div>
  </footer>
  <!-- FIN DEL PIE DE PAGINA   -->

  <script>
      //CARRUSEL 
    $('.carousel').carousel({
        interval: 2000
      })
  </script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.slim.min.js"></script>
</body>

</html>
