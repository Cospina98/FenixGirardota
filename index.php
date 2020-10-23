<?php?>

<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="imagenes/logo.ico" type="image/png" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
  <link rel="stylesheet" href="Estilos.css">
  <title>Club Deportivo Fénix</title>
</head>

<body class="white">


  <!-- BARRA DE NAVEGACIÓN -->
  <nav class="navbar navbar-expand-lg sticky navbar-dark gris scrolling-navbar fixed-top">

    <div class="container">
      <a class="navbar-brand" href="index.php">FÉNIX</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="" index.php>Home<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Servicios">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Profes">Profes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://fenixgirardota.blogspot.com/" target="_blank"> Blog</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Categorias
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="Categoria1.html" target="_blank">Escuela Sub-8</a>
              <a class="dropdown-item" href="Categoria2.html" target="_blank">Sub-10 Sub-12</a>
              <a class="dropdown-item" href="Categoria3.html" target="_blank">Sub-13 Sub-14</a>

            </div>
          </li>
        </ul>
        <br>


        <ul class="navbar-nav ml-auto nav-flex-icons">
          <li class="nav-item">
            <a class="nav-link waves-effect waves-light" href="https://www.facebook.com/fenixgirardota2015/" target="_blank">
              <i class="fab fa-facebook fa-lg"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect waves-light" href="https://www.instagram.com/clubdeportivofenix/" target="_blank">
              <i class="fab fa-instagram fa-lg"></i>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <!-- CARRUSEL -->
  
  <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="imagenes/Carrusel1.jpg" class="img-fluid" alt="...">
      </div>
      <div class="carousel-item">
        <img src="imagenes/Carrusel2.jpg" class="img-fluid" alt="...">
      </div>
      <div class="carousel-item">
        <img src="imagenes/Carrusel3.jpg" class="img-fluid" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


 

    <!-- CARRUSEL MULTIPLE DE SERVICIOS -->

    <div class="container-fluid" id="Servicios">
      <h2 class="text-center text-muted m-t h2-responsive" style="font-family:'Anton',sans-serif;font-size:50px"> Servicios</h2>

      <div class="container">
        <!--Carousel Wrapper-->
        <div id="multi-item-example" class="carousel slide carousel-multi-item carousel-fade " data-ride="carousel">

          <!--Controls-->
          <!-- <div class="controls-top">
           <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
           <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
          </div> -->
          <!--/.Controls-->

          <!--Indicators-->
          <ol class="carousel-indicators ">
            <li class="grey darken-3" data-target="#multi-item-example" data-slide-to="0" class="active"></li>
            <li class="grey darken-3" data-target="#multi-item-example" data-slide-to="1"></li>

          </ol>
          <!--/.Indicators-->

          <!--Slides-->
          <div class="carousel-inner" role="listbox">


            <!--First slide-->
            <div class="carrousel servicios carousel-item active white">

              <div class="row">
                <div class="col-lg-4 ">
                  <a href="https://fenixgirardota.herokuapp.com/ " target="_blank"><img class="card-img-top rounded-circle example hoverable" src="imagenes/circulo3.jpg"></a>
                  <h2 class="card-title">Entrenamientos</h2>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                </div>


                <div class="col-lg-4 clearfix  d-md-block">
                  <a href="https://fenixgirardota.herokuapp.com/ " target="_blank"><img class="card-img-top rounded-circle example hoverable" src="imagenes/circulo4.jpg"></a>
                  <h2 class="card-title">Personalizados</h2>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                </div>

                <div class="col-lg-4 clearfix  d-md-block">
                  <a href="https://fenixgirardota.herokuapp.com/ " target="_blank"><img class="card-img-top rounded-circle example hoverable" src="imagenes/circulo5.jpg"></a>
                  <h2 class="card-title">Fisioterapia</h2>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                </div>
              </div>

            </div>
            <!--/.First slide-->

            <!--Second slide-->
            <div class="carousel servicios carousel-item white">

              <div class="row">
                <div class="col-lg-4 ">
                  <a href="https://fenixgirardota.herokuapp.com/ " target="_blank"><img class="card-img-top rounded-circle example hoverable" src="imagenes/circulo6.jpg"></a>
                  <h2 class="card-title">Masoterapia</h2>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>

                </div>

                <div class="col-lg-4 clearfix d-md-block">
                  <a href="https://fenixgirardota.herokuapp.com/ " target="_blank"><img class="card-img-top rounded-circle example hoverable" src="imagenes/circulo7.jpg"></a>
                  <h2 class="card-title">Comunicaciones</h2>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                </div>

                <div class="col-lg-4 clearfix  d-md-block">
                  <a href="https://fenixgirardota.herokuapp.com/ " target="_blank"><img class="card-img-top rounded-circle example hoverable" src="imagenes/circulo8.jpg"></a>
                  <h2 class="card-title">Metodología</h2>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                </div>
              </div>
            </div>
            <!--/.Second slide-->
          </div>
          <!--/.Slides-->
        </div>
        <!--/.Carousel Wrapper-->
      </div>
    </div>


    <!-- SECCION NOSOTROS -->


    <div class="container-fluid" style="background-color: black; margin-top:70px" id="nosotros">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h1> NOSOTROS</h1>
            <P> Lorem ipsum dolor sit amet, consectetur adipisicing elit. In quis ducimus tempora vel voluptatibus temporibus quisquam exercitationem rerum tempore architecto ab aliquam, repudiandae accusamus corporis cupiditate laborum omnis modi quasi.</P>
          </div>

          <div class="col-md-6   d-none d-sm-block">
            <img src="Galeria/nosotros.jpg" alt="" style="width:100%; margin">
          </div>
        </div>
      </div>
    </div>


    <!-- TARJETAS CON ACORDEON -->
    <div class="container-fluid bg-black">
      <div class="container" id="Profes">
        <h2 class="text-center mt-5 display-4">Nuestros Profes</h2>
        <div class="row">
             <!-- TRES COLUMNAS -->
          <div class="col-md-4">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#ejemplo1" aria-expanded="false" aria-controls="collapseExample">
              <img class="z-depth-2"  src="imagenes/profe1.jpg" style="width:100%;margin:0px" alt="...">
            </button>
          </div>
          <div class="collapse" id="ejemplo1">
            <div class="card card-body d-block d-md-none">
              <p>
                <h2>Él es el Profe Pipe, </h2>
                Es el fundador del CLUB DEPORTIVO FÉNIX y la persona encargada de Coordinar nuestro Club, acompañando los procesos deportivos de nuestros campeones
                Su nombre completo es Felipe Madrid Zapata. Tiene 26 años de edad.
                <h3> Sus estudios son:</h3>:
                -Profesional en deporte del PCJIC <br>
                - Diplomado en entretenimiento personalizado de la universidad de Antioquia <br>
                -Curso de manifestaciones de la fuerza y entrenamiento de la hipertrofia en la U de A <br>
                -Curso de bicicleta de estudio bajo techo en la U de A <br>
                - Curso de pilates en la U de A <br>
                Participe en el primer curso de entremiento de arqueros de indeportes Antioquia <br>
                <h3>Su experiencia es:</h3>
                - Realizó las prácticas EPM como instructor en gimnaso,
                - Instructor de fútbol de salón
                - Instructor del grupo de la salud del Inder de Girardota <br>
              </p>
            </div>
          </div>


          <div class="col-md-4">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#ejemplo2" aria-expanded="false" aria-controls="collapseExample">
              <img class="z-depth-2" src="imagenes/profe2.jpg" style="width:100%;margin:0px" alt="...">
            </button>
          </div>
          <div class="collapse" id="ejemplo2">
            <div class="card card-body d-block d-md-none">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
            </div>
          </div>


          <div class="col-md-4">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#ejemplo3" aria-expanded="false" aria-controls="collapseExample">
              <img class="z-depth-2" src="imagenes/profe3.jpg" style="width:100%;margin:0px" alt="...">

            </button>
          </div>
          <!-- FIN TRES COLUMNAS -->


            <!-- COLLAPSE PRIMEROS 3 COLUMNAS -->

          <div class="collapse" id="ejemplo1">
            <div class="card card-body d-none d-md-block">
              <p>
                <h2>Él es el Profe Pipe, </h2>
                Es el fundador del CLUB DEPORTIVO FÉNIX y la persona encargada de Coordinar nuestro Club, acompañando los procesos deportivos de nuestros campeones

                Su nombre completo es Felipe Madrid Zapata. Tiene 26 años de edad.
                <h3> Sus estudios son:</h3>:
                -Profesional en deporte del PCJIC <br>
                - Diplomado en entretenimiento personalizado de la universidad de Antioquia <br>
                -Curso de manifestaciones de la fuerza y entrenamiento de la hipertrofia en la U de A <br>
                -Curso de bicicleta de estudio bajo techo en la U de A <br>
                - Curso de pilates en la U de A <br>
                Participe en el primer curso de entremiento de arqueros de indeportes Antioquia <br>
                <h3>Su experiencia es:</h3>
                - Realizó las prácticas EPM como instructor en gimnaso,
                - Instructor de fútbol de salón
                - Instructor del grupo de la salud del Inder de Girardota <br>
              </p>

            </div>
          </div>


          <div class="collapse" id="ejemplo2">
            <div class="card card-body card card-body d-none d-md-block ">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
            </div>
          </div>


          <div class="collapse" id="ejemplo3">
            <div class="card card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
            </div>
          </div>
          <!-- FIN COLLASPSE 3 PRIMERAS COLUMNAS -->

              <!-- TRES COLUMNAS -->
          <div class="col-md-4">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#ejemplo4" aria-expanded="false" aria-controls="collapseExample">
              <img class="z-depth-2" src="imagenes/profe4.jpg" style="width:100%;margin:0px" alt="...">

            </button>
          </div>

          <div class="collapse" id="ejemplo4">
            <div class="card card-body d-block d-md-none">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
            </div>
          </div>


          <div class="col-md-4">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#ejemplo5" aria-expanded="false" aria-controls="collapseExample">
              <img class="z-depth-2" src="imagenes/profe5.jpg" style="width:100%;margin:0px" alt="...">

            </button>
          </div>

          <div class="collapse" id="ejemplo5">
            <div class="card card-body d-block d-md-none">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
            </div>
          </div>


          <div class="col-md-4">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#ejemplo6" aria-expanded="false" aria-controls="collapseExample">
              <img class="z-depth-2" src="imagenes/profe6.jpg" style="width:100%;margin:0px" alt="...">

            </button>
          </div>
           <!-- FIN TRES COLUMNAS -->

                <!-- COLLAPSE SEGUNDAS TRES COLUMNAS -->
          <div class="collapse" id="ejemplo4">
            <div class="card card-body d-none d-md-block">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
            </div>
          </div>


          <div class="collapse" id="ejemplo5">
            <div class="card card-body d-none d-md-block">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
            </div>
          </div>


          <div class="collapse" id="ejemplo6">
            <div class="card card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
            </div>
          </div>
            <!--  FIN COLLAPSE SEGUNDAS TRES COLUMNAS -->


        </div>
        <!-- FIN ROW -->
      </div>
      <!-- FIN CONTAINER PROFES -->
    </div>
    <!-- FIN CONTAINER FLUID -->

    <!-- GALERIA DE IMAGENES -->


    <div class="container-fluid" id="Galeria">
      <h2 class="text-center text-warning">GALERIA </h2>
      <div class="row">

        <div class="col-md-4">
          <div id="Carruselgaleria1" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#Carruselgaleria1" data-slide-to="0" class="active"></li>
              <li data-target="#Carruselgaleria1" data-slide-to="1"></li>
              <li data-target="#Carruselgaleria1" data-slide-to="2"></li>
              <li data-target="#Carruselgaleria1" data-slide-to="3"></li>
              <li data-target="#Carruselgaleria1" data-slide-to="4"></li>


            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active view overlay zoom ">
                <img src="Galeria/1.jpg" class="img-fluid" alt="...">
              </div>
              <div class="carousel-item view overlay zoom">
                <img src="Galeria/2.jpg" class="img-fluid" alt="...">
              </div>
              <div class="carousel-item view overlay zoom">
                <img src="Galeria/3.jpg" class="img-fluid" alt="...">
              </div>
              <div class="carousel-item view overlay zoom">
                <img src="Galeria/10.jpg" class="img-fluid" alt="...">
              </div>
              <div class="carousel-item view overlay zoom">
                <img src="Galeria/11.jpg" class="img-fluid" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#Carruselgaleria1" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#Carruselgaleria1" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>

        <div class="col-md-4">
          <div id="Carruselgaleria2" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#Carruselgaleria2" data-slide-to="0" class="active"></li>
              <li data-target="#Carruselgaleria2" data-slide-to="1"></li>
              <li data-target="#Carruselgaleria2" data-slide-to="2"></li>
              <li data-target="#Carruselgaleria2" data-slide-to="3"></li>
              <li data-target="#Carruselgaleria2" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active view overlay zoom">
                <img src="Galeria/4.jpg" class="img-fluid" alt="...">
              </div>
              <div class="carousel-item view overlay zoom">
                <img src="Galeria/5.jpg" class="img-fluid" alt="...">
              </div>
              <div class="carousel-item view overlay zoom">
                <img src="Galeria/6.jpg" class="img-fluid" alt="...">
              </div>
              <div class="carousel-item view overlay zoom">
                <img src="Galeria/12.jpg" class="img-fluid" alt="...">
              </div>
              <div class="carousel-item view overlay zoom">
                <img src="Galeria/13.jpg" class="img-fluid" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#Carruselgaleria2" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#Carruselgaleria2" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>

        <div class="col-md-4">
          <div id="Carruselgaleria3" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#Carruselgaleria3" data-slide-to="0" class="active"></li>
              <li data-target="#Carruselgaleria3" data-slide-to="1"></li>
              <li data-target="#Carruselgaleria3" data-slide-to="2"></li>
              <li data-target="#Carruselgaleria3" data-slide-to="3"></li>
              <li data-target="#Carruselgaleria3" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active view overlay zoom">
                <img src="Galeria/7.jpg" class="img-fluid" alt="...">
              </div>
              <div class="carousel-item view overlay zoom">
                <img src="Galeria/8.jpg" class="img-fluid" alt="...">
              </div>
              <div class="carousel-item view overlay zoom">
                <img src="Galeria/9.jpg" class="img-fluid" alt="...">
              </div>
              <div class="carousel-item view overlay zoom">
                <img src="Galeria/14.jpg" class="img-fluid" alt="...">
              </div>
              <div class="carousel-item view overlay zoom">
                <img src="Galeria/15.jpg" class="img-fluid" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#Carruselgaleria3" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#Carruselgaleria3" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>

      </div>
    </div>

    <!-- Footer -->
    <footer class="page-footer font-small elegant-color-dark pt-4">

      <!-- Footer Links -->
      <div class="container text-center text-md-left">

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-md-4 mx-auto">

            <!-- Content -->
            <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Footer Content</h5>
            <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
              consectetur
              adipisicing elit.</p>

          </div>
          <!-- Grid column -->

          <hr class="clearfix w-100 d-md-none">

          <!-- Grid column -->
          <div class="col-md-2 mx-auto">

            <!-- Links -->
            <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

            <ul class="list-unstyled">
              <li>
                <a href="#!">Link 1</a>
              </li>
              <li>
                <a href="#!">Link 2</a>
              </li>
              <li>
                <a href="#!">Link 3</a>
              </li>
              <li>
                <a href="#!">Link 4</a>
              </li>
            </ul>

          </div>
          <!-- Grid column -->

          <hr class="clearfix w-100 d-md-none">

          <!-- Grid column -->
          <div class="col-md-2 mx-auto">

            <!-- Links -->
            <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

            <ul class="list-unstyled">
              <li>
                <a href="#!">Link 1</a>
              </li>
              <li>
                <a href="#!">Link 2</a>
              </li>
              <li>
                <a href="#!">Link 3</a>
              </li>
              <li>
                <a href="#!">Link 4</a>
              </li>
            </ul>

          </div>
          <!-- Grid column -->

          <hr class="clearfix w-100 d-md-none">

          <!-- Grid column -->
          <div class="col-md-2 mx-auto">

            <!-- Links -->
            <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

            <ul class="list-unstyled">
              <li>
                <a href="#!">Link 1</a>
              </li>
              <li>
                <a href="#!">Link 2</a>
              </li>
              <li>
                <a href="#!">Link 3</a>
              </li>
              <li>
                <a href="#!">Link 4</a>
              </li>
            </ul>

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </div>
      <!-- Footer Links -->


      <!-- Social buttons -->
      <ul class="list-unstyled list-inline text-center">
        <li class="list-inline-item">
          <a class="btn-floating btn-fb mx-1">
            <i class="fab fa-facebook-f"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-tw mx-1">
            <i class="fab fa-twitter"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-gplus mx-1">
            <i class="fab fa-google-plus-g"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-li mx-1">
            <i class="fab fa-linkedin-in"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-dribbble mx-1">
            <i class="fab fa-dribbble"> </i>
          </a>
        </li>
      </ul>
      <!-- Social buttons -->

      <!-- Copyright -->
      <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
      </div>
      <!-- Copyright -->

    </footer>
    <!-- Footer -->

    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
</body>

</html>