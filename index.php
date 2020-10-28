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
        <ul class="navbar-nav ">
          <li class="nav-item ">
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
        <img src="imagenes/carruseluno.jpg" class="img-fluid" alt="...">
      </div>
      <div class="carousel-item">
        <img src="imagenes/carruseldos.jpg" class="img-fluid" alt="...">
      </div>
      <div class="carousel-item">
        <img src="imagenes/carruseltres.jpg" class="img-fluid" alt="...">
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

    <div class="container  pb-5 pt-5">
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
            <h2 class="text-center text-muted display-4 mt-5"> Servicios</h2>

            <div class="row">
              <div class="col-lg-4 ">
                <a href="Entrenamientos.html" target="_blank"><img class="card-img-top rounded-circle example hoverable" src="imagenes/circulo3.jpg"></a>
                <h3 class="card-title">Entrenamientos</h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
              </div>


              <div class="col-lg-4 clearfix  d-md-block">
                <a href="https://fenixgirardota.herokuapp.com/ " target="_blank"><img class="card-img-top rounded-circle example hoverable" src="imagenes/circulo4.jpg"></a>
                <h3 class="card-title">Personalizados</h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
              </div>

              <div class="col-lg-4 clearfix  d-md-block">
                <a href="https://fenixgirardota.herokuapp.com/ " target="_blank"><img class="card-img-top rounded-circle example hoverable" src="imagenes/circulo5.jpg"></a>
                <h3 class="card-title">Fisioterapia</h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
              </div>
            </div>

          </div>
          <!--/.First slide-->

          <!--Second slide-->
          <div class="carousel servicios carousel-item white">
            <h2 class="text-center text-muted display-4 mt-5"> Servicios</h2>

            <div class="row">
              <div class="col-lg-4 ">
                <a href="https://fenixgirardota.herokuapp.com/ " target="_blank"><img class="card-img-top rounded-circle example hoverable" src="imagenes/circulo6.jpg"></a>
                <h3 class="card-title">Masoterapia</h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>

              </div>

              <div class="col-lg-4 clearfix d-md-block">
                <a href="https://fenixgirardota.herokuapp.com/ " target="_blank"><img class="card-img-top rounded-circle example hoverable" src="imagenes/circulo7.jpg"></a>
                <h3 class="card-title">Comunicaciones</h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
              </div>

              <div class="col-lg-4 clearfix  d-md-block">
                <a href="https://fenixgirardota.herokuapp.com/ " target="_blank"><img class="card-img-top rounded-circle example hoverable" src="imagenes/circulo8.jpg"></a>
                <h3 class="card-title">Metodología</h3>
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


  <div class="container-fluid elegant-color-dark" id="nosotros">
    <div class="container">
      <h1 class="text-muted text-center pt-4"> NOSOTROS</h1>

      <div class="row">

        <div class="col-lg-4">
          <h3 class="text-muted text-center">QUIÉNES SOMOS</h3>
          <P class="text-muted text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat obcaecati ea porro assumenda, iusto, a dolores aut culpa sed dolore ex debitis fugiat aspernatur distinctio amet id, modi consectetur eius!</P>
        </div>

        <div class="col-lg-4">
          <h3 class="text-muted text-center">MISIÓN</h3>
          <P class="text-muted text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat obcaecati ea porro assumenda, iusto, a dolores aut culpa sed dolore ex debitis fugiat aspernatur distinctio amet id, modi consectetur eius!</P>
        </div>


        <div class="col-lg-4">
          <h3 class="text-muted text-center">VISIÓN</h3>
          <P class="text-muted text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat obcaecati ea porro assumenda, iusto, a dolores aut culpa sed dolore ex debitis fugiat aspernatur distinctio amet id, modi consectetur eius!</P>
        </div>
      </div>
    </div>
  </div>


  <!-- TARJETAS CON ACORDEON -->
  <div class="container-fluid">
    <div class="container" id="Profes">
      <h2 class="text-center text-muted pt-5 display-4" id="tituloprofes">Nuestros Profes</h2>
      <div class="row">
        <!-- TRES COLUMNAS -->
        <div class="col-md-4">
          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#ejemplo1" aria-expanded="false" aria-controls="collapseExample">
            <img class="z-depth-2" src="imagenes/profe1.jpg" style="width:100%;margin:0px" alt="...">
          </button>
        </div>
        <div class="collapse" id="ejemplo1">
          <div class="card card-body d-block d-md-none">
            <p>
              <h3>Él es el Profe Pipe, </h3>
              Es el fundador del CLUB DEPORTIVO FÉNIX y la persona encargada de Coordinar nuestro Club, acompañando los procesos deportivos de nuestros campeones
              Su nombre completo es Felipe Madrid Zapata. Tiene 26 años de edad.
              <h4> Sus estudios son:</h4>
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
            <p class="text-muted">
              <h2>Él es el Profe Pipe, </h2>
              Es el fundador y Coordinar acompañando del club. Además acompaña los procesos deportivos de nuestros campeones

              Su nombre completo es Felipe Madrid Zapata. Tiene 26 años de edad.
              <h3> Sus estudios son:</h3>
              <ul>
                <li>Profesional en deporte del PCJIC </li>
                <li> Diplomado en entretenimiento personalizado de la universidad de Antioquia </li>
                <li> Curso de manifestaciones de la fuerza y entrenamiento de la hipertrofia en la U de A </li>
                <li> Curso de bicicleta de estudio bajo techo en la U de A </li>
                <li> Curso de pilates en la U de A </li>
              </ul>
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


  <!-- FOOTER -->

  <footer class="elegant-color-dark" >

    <div class="container-fluid elegant-color-dark" id="nosotros" >
      <div class="container " >

        <div class="row">

          <div class="col-lg-4 pr-4">
            <h4 class="white-text text-center py-4">Club Deportivo Fenix</h4>
            <P class="white-text text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat obcaecati ea porro assumenda, iusto, a dolores aut culpa sed dolore ex debitis fugiat aspernatur distinctio amet id, modi consectetur eius!</P>
          </div>

          <div class="col-lg-4 py-4 pr-4 ">
            <h4 class="white-text text-center">Redes Sociales</h4>

            <div class="text-center  py-5 pl-5">
              <a class="fb-ic"  href="https://www.facebook.com/fenixgirardota2015/" target="_blank">
                <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
              </a>

              <a class="ins-ic" href="https://www.instagram.com/clubdeportivofenix/" target="_blank">
                <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
              </a>

              <a class="ytube-ic" href="https://www.youtube.com/channel/UCyOHtjNnCvPC4cJNmcHEZZw" target="_blank">
                <i class="fab fa-youtube fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
              </a>
            </div>
          </div>


          <div class="col-lg-4 py-4 pr-5">
            <h4 class="white-text text-center">Contacto</h4>
            <div class="py-4 ml-5">
              <div class="d-flex flex-row">
                <div>
                  <i class="fas fa-home fa-lg white-text"></i>
                </div>
                <div>
                  <p class="white-text ml-3">Calle 10 #10b20 int 106</p>

                </div>
              </div>

              <div class="d-flex flex-row">
                <div>
                  <i class="fas fa-mobile-alt fa-lg white-text ml-2"></i>
                </div>
                <div>
                  <p class="white-text ml-3">3002547896</p>
                </div>
              </div>


              <div class="d-flex flex-row">
                <div>
                  <i class="far fa-envelope fa-lg white-text ml-2"></i>
                </div>
                <div>
                  <p class="white-text ml-3">clubdeportivofenix@gmail.com</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-copyright text-center white-text py-3" style="background-color: rgba(0, 0, 0, 0.749)">© 2020 Copyright:Carlos Daniel Ospina Villa
  </div>
  </footer>

  <script escript.js> </script>
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