<!DOCTYPE html>
<html>
<head>
	<title>Inicio | Servicio Social</title>
  @include('templates.style')
 
</head>
<body>
@include('templates.nav')
  <!-- banner -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1" class=""></li>
      <li data-target="#myCarousel" data-slide-to="2" class=""></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <div class="container">
          <div class="carousel-caption">
            <h3>Bienvenidos <span style="color: #15593C;">ITSZO</span></h3>
            <p>Realiza el servicio social.</p>
          </div>
        </div>
      </div>
      <div class="item item2">
        <div class="container">
          <div class="carousel-caption">
            <h3>Bienvenidos <span style="color: #15593C;">ITSZO</span></h3>
            <p>Realiza el servicio social.</p>
          </div>
        </div>
      </div>
      <div class="item item3">
        <div class="container">
          <div class="carousel-caption">
            <h3>Bienvenidos <span style="color: #15593C;">ITSZO</span></h3>
            <p>Realiza el servicio social.</p>
          </div>
        </div>
      </div>
      
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="fa fa-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="fa fa-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!-- The Modal -->
  </div>
  <!--//banner -->

<div class="about-main">
    <div class="container">
      <div class="wthree_head_section">
        <h3 class="w3l_header">Bienvenidos al <span>Servicio Social</span></h3>
      </div>
      <div class="col-md-5 about-grid1">
      </div>
      <div class="col-md-7 about-grid2">
        <div class="about-subgrid">
          <p>Proposito</p>
        </div>
        <div class="wthree_head_section">
          <p style="text-align: justify;">
            Establecer la normativa para la operación y cumplimiento del Servicio Social de los planes de estudio de nivel licenciatura para la formación y desarrollo de competencias profesionales de las Instituciones adscritas al TecNM, con la finalidad de fortalecer la formación integral del estudiante, desarrollando una conciencia de solidaridad y compromiso con la sociedad a la que pertenece, mediante la aplicación y desarrollo de sus competencias profesionales.
          </p>
        </div>
      </div>
    </div>
</div>

@include('home.delestudiante')

@include('home.lineamiento')

@include('home.footer')


</body>
</html>