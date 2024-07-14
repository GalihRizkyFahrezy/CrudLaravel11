<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Halaman Utama</title>
</head>
<body>
<nav class="navbar d-flex" style="background-color: #c9c9c9;">
  <div class="container-fluid">
    <div class="d-flex justify-content-start">
        <a class="btn btn-outline-light" style="color:black;" href="/">Halaman Utama</a>
        <a class="btn btn-outline-light ms-3" style="color:black;" href="/dashboard">Dashboard</a>
        <a class="btn btn-outline-light ms-3" style="color:black;" href="/dashboard">Readme</a>
    </div>
    <form action="/" metehod="get" class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" name="search">
        <button class="btn btn-outline-light" type="submit" style="color:black;">Search</button>
    </form>
  </div>
</nav>

<div id="slider" class="carousel slide carousel-fade">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#slider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#slider" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#slider" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
    <div class="carousel-inner" data-bs-ride="carousel">
    @foreach($data->take(3) as $row)
        <div class="carousel-item active" data-bs-interval="2000">
            <img src="/berita/{{$row->foto}}" class="d-block" style="height:40vh; margin-left:auto; margin-right:auto;">
        </div>
    @endforeach
    </div>
</div>

<div style="height:100px; width:100vw; background-color:#c9c9c9; display:grid; align-items:center;">
    <p style="text-align:center;">
        <b>Website ini hanya sample</b>
    </p>
</div>

    <div class="container">
        <div class="d-flex flex-wrap">
            @foreach($data as $row)
            <div class="ms-1 me-1 mt-3">
                <a href="/viewberita/{{$row->id}}" style="text-decoration:none;">
                    <div class="card " style="width:25vw; height:55vh;">
                        <div class="card-body">
                            <div style="overflow:hidden; height:7vh">
                                <b>{{$row->judul}}</b>
                            </div>
                            <div class="row justify-content-center mt-2">
                                <img src="/berita/{{$row->foto}}" style="width:200px;; height:200px">
                            </div>
                            <div class="mt-2" style="overflow:hidden; height:10vh">
                                {{$row->content}}
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>

    <script>
        const currentUrl = window.location.href;
if(currentUrl !="http://127.0.0.1:8000/")
{
    document.getElementById("slider").style.display = "none";

}
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
<footer>
<div class="mt-2" style="height:100px; width:100vw; background-color:#c9c9c9; display:grid; align-items:center;">
    <p>
        Email : galihrizkyfahrezy@gmail.com<br>
        Whatsapp : 081298208096<br>
    </p>
</div>
</footer>
</html>