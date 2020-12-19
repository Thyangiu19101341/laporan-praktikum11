<!doctype html>
<html lang="en">
  <head>
  <!--Required meta tags-->
  <meta charset="utf-8">
  <meta name="viewport" contet="width=device-width,initial-scale=1">

  <!-- botstrap css -->
  <link href="Https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-betal/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmp1" crossorigin="anonymous">

  <title>@yield('JUDUL PAGE')</title>
  </head>
  <body>
  <div class="container-fluid">

           <nav class="navbar navbar-expand-lg navbar-light bg-light">
           <div class="container-fluid">
           <a class="navbar-brand" href="#">Toko Hana</a>
           <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=
           "#navbarsupportedcontent" aria-controls="navbarsupportedcontent" aria-expanded="false" aria-label=
           "toggle navigation">
           <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse" id="navbarsupportedcontent">
           <ul class="navbar-nav me-auto mb-lg-0">
           <li class="nav-item">
           <a class="nav-link active" aria-current="page" href="#">kategori</a>
           </li>
           <li class="nav-item">
           <a class="nav-link active"aria-current="page" href="{{route('prak11.index')}}">produks</a>
           </li>
           </ul>
           <form class="d-flex">
           <input class="form-control me-2" type"search" placeholder="search" aria-label="search">
           <button class="btn btn-outline-success" type="submit">search</button>
           </form>
           </div>
           </div>
           </nav>

           <div class="container-fluid">
           @yield('KONTEN')
           <div>

           </div>
           <script src="Https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-betal/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmp1" crossorigin="anonymous"></script>
  </body>
  </html>