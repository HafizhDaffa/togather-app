<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css')}}">
  <link rel="shortcut icon" href="{{ URL::to('/aset/logo.png') }}" />

  <title>@yield('title')</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top fw-normal">
    <div class="container">
      <a class="navbar-brand" href="http://127.0.0.1:8000/home">
        <img src="aset/logo2.png" alt="" width="170" height="60" class="d-inline-block align-text-top">
        <!-- <h4> TO-GATHER </h4> -->
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav ">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/home') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/kategori') }}">Kategori</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/lowongan') }}">Buat Lowongan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/profil') }}">Profil</a>
          </li>
        </ul>
        <ul class="navbar-nav px-6">
          <li class="nav-item">
            <form action="{{ route('logout') }}" method="POST">
              @csrf
              <input type="submit" class="bg-transparent text-white" style="border: none;" value="Logout">
            </form>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS --> -->

  <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>