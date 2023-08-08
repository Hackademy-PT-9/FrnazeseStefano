<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Esecizio 08-08</title>
</head>

<body style="background-color: #334;">
    
  <nav class="navbar navbar-expand-lg bg-dark text-light">
    <div class="container-fluid">
      <a class="navbar-brand text-light" href="{{ route('home') }}">Esercizio 08/08</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link  text-light " aria-current="page" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="{{ route('about') }}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light active" href="{{ route('contacts') }}">Contacts</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="container mt-5">
    <div class="row">
      <div class="col-4">
        <div class="card" style="width: 20rem;">
          <div class="card-body">
            <h5 class="card-title">Torna Stringa da route</h5>
          <a href="{{ route('stringa') }}" class="btn btn-danger">--></a>
        </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card" style="width: 20rem;">
          <div class="card-body">
            <h5 class="card-title">Torna Intero da route</h5>
          <a href="{{ route('intero') }}" class="btn btn-danger">--></a>
        </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card" style="width: 20rem;">
          <div class="card-body">
            <h5 class="card-title">Torna ElementoArray da route</h5>
          <a href="{{ route('array') }}" class="btn btn-danger">--></a>
        </div>
        </div>
      </div>
    </div>
  </section>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
