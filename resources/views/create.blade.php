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

    <div class="container">
        <div class="card">
            <div class="card-body">
                <form action="formcreate" method="post" enctype="multipart/form-data" id="formupload">
                    @csrf
                    <div class="d-flex mt-3">
                        <label for="penulis" class="form-label col-1">penulis</label>
                        <input type="text" name="penulis" id="penulis" class="form-control" maxlength="16" required>
                    </div>
                    <div class="d-flex mt-3">
                        <label for="judul" class="form-label col-1">Judul</label>
                        <input type="text" name="judul" id="judul" class="form-control" maxlength="32" required>
                    </div>
                    <div class="d-flex mt-3">
                        <label for="foto" class="form-label col-1">foto</label>
                        <input type="file" name="foto" id="fotoberita" class="form-control" accept=".jpg, .png, .jpeg" required>
                    </div>
                    <div id="fotodiv"  class="alert alert-danger mt-3">
                        <label id="fotoalert"></label>
                    </div>
                    <div class="mt-3">
                        <textarea type="textarea" name="content" id="content" class="form-control" placeholder="Content" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script src="/javascript/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>