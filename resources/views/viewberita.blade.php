<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <a class="btn btn-primary m-3" href="/">Kembali</a>
    <div class="container mt-3">
        <div class="card">
            <div class="card-body">
                <div>
                    <h3>
                        {{$data->judul}}
                    </h3>
                    <h5>
                        Ditulis oleh : {{$data->penulis}}
                    </h5>
                </div>
            </div>
            <div  class="row justify-content-center">
                <img src="/berita/{{$data->foto}}" style="width:30vw;">
            </div>
            
            <div>
            {!! nl2br($data->content)!!}
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>