<!DOCTYPE html>

<html lang="en">

<head>

  <style>
    body {
      margin: 0;
      padding: 0;
    }


    #menu ul {
      margin: 0;
      background-color: #1E2C72;
      list-style: none;
    }

    #menu ul li {
      display: inline;
    }

    #menu ul li a {
      padding: 10px 30px;
      display: inline-block;
      color: white;
      text-decoration: none;

    }

    #menu ul li a:hover {
      color: #3552E2;
      background-color: white;
    }

    #cabecalho{
      background: #3552E2;
    }
    
    #cabecalho ul {
      list-style: none;
      text-align: end;
      height: 100%;
    }

    #cabecalho ul li {
      display: inline;
    }

    #cabecalho ul li a {

      padding: 10px 30px;
      display: inline-block;
      color: white;
      text-decoration: none;

    }

    #cabecalho ul li a:hover {
      color: #3552E2;
      background-color: white;
    }
  </style>


<body>

  <div id="cabecalho">
    
  <img src="/img/logo.png" width="300" height="100" class="d-inline-block align-top" alt="">
    
  
      <ul>
        <li><a href="{{route('login')}}">Login</a></li>
        <li><a href="{{ route('register') }}">Register</a></li>
      </ul>
    </div>


  <div id="menu">
    <ul>
      <li><a href="#">Inicio</a></li>
      <li><a href="#">Cursos</a></li>
      <li><a href="#">Quem somos</a></li>
  </div>
  </ul>
  </div>

</body>



<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>

<body class="antialiased">
  <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">


    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" ;>
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>


      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="/img/carrossel1.jpg" alt="First slide" style="max-width: 40%; height: auto" ;>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="/img/carrossel2.jpg" alt="Second slide" style="max-width: 40%;height: auto" ;>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="/img/carrossel3.jpg" alt="Third slide" style="max-width: 40%;height: auto" ;>
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


    </html>