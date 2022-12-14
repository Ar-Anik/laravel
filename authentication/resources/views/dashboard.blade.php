<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title> DashBoard </title>
  </head>
  <body>
  <!--###########Nav#########################-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">Authentication</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            @if(Auth::check())
              {{Auth::user()->name}}
            @endif
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
          </form>
          </ul>
        </li>

      </ul>
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        </div>
        </div>
   </nav>
    <!--#################End Nav####################-->


    <!--######################Card#####################-->
    <div class="container mt-5">
        <div class="row">

            <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Book-1</h5>
                    <a href="#" class="card-link">Borrow</a>
                    <a href="#" class="card-link">Return</a>
                </div>
            </div>
            </div>

            <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Book-2</h5>
                    <a href="#" class="card-link">Borrow</a>
                    <a href="#" class="card-link">Return</a>
                </div>
            </div>
            </div>

            <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Book-3</h5>
                    <a href="#" class="card-link">Borrow</a>
                    <a href="#" class="card-link">Return</a>
                </div>
            </div>
            </div>

        </div>
    </div>

    <!--###################End Card#####################-->


    <!-- ################## footer ############################-->



    <!-- ##################end footer #######################-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
