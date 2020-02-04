<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container text-center">
      <!-- Navbar -->
      <ul class="nav sticky-top bg-white">
        <li class="nav-item">
          <a class="nav-link active" href="{{ route('welcome') }}">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Cafes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Stuff</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1">Login</a>
        </li>
      </ul>
      <hr class="mb-5 mt-5">
      <!-- Carrousel -->
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{url('assets\img\slide01.jpg')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{url('assets\img\slide02.jpg')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{url('assets\img\slide03.jpg')}}" class="d-block w-100" alt="...">
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
      <!-- Cards -->
      <hr class="mb-5 mt-5">
      <h1 class="mb-3">Prueba Nuestros Cafés!</h1>
      <div class="d-flex flex-wrap justify-content-center">
        <div class="card mr-3 mb-3" style="width: 18rem;">
          <img src="{{url('assets\img\cafe_latte.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
        <div class="card mr-3 mb-3" style="width: 18rem;">
          <img src="{{url('assets\img\cafe_mocca_blanco.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
        <div class="card mb-3" style="width: 18rem;">
          <img src="{{url('assets\img\cafe_mocha.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
        <div class="card mr-3 mb-3" style="width: 18rem;">
          <img src="{{url('assets\img\capuccino.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
        <div class="card mr-3 mb-3" style="width: 18rem;">
          <img src="{{url('assets\img\caramel_maciatto.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img src="{{url('assets\img\latte_maciatto.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
      <hr class="mb-5 mt-5">
      <h1 class="mb-3">Contátenos</h1>
      <!-- contactenos -->
      <div class="text-left">
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Correo Elecctrónico</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Comentario</label>
            <textarea class="form-control" aria-label="With textarea"></textarea>
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Acepto condiciones de privacidad.</label>
          </div>
          <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
      </div>
      <!-- footer -->
      <div class="bg-secondary text-center text-white mt-3">
        <div class="row">
          <div class="col">
            <p>Twitter</p>
            <p>Facebook</p>
            <p>Instagram</p>
          </div>
          <div class="col">
            <p>Licencias</p>
            <p>Terminos Legales</p>
            <p>Copyrigth</p>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
