<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Dashboard</title>
</head>
<body>
<nav class="navbar d-flex" style="background-color: #c9c9c9;">
  <div class="container-fluid">
    <div class="d-flex justify-content-start">
        <a class="btn btn-outline-light" style="color:black;" href="/">Halaman Utama</a>
        <a class="btn btn-outline-light ms-3" style="color:black;" href="/dashboard">Dashboard</a>
        <a class="btn btn-outline-light ms-3" style="color:black;" href="/dashboard">Readme</a>
    </div>
    <form action="/dashboard" metehod="get" class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" name="search">
        <button class="btn btn-outline-light" type="submit" style="color:black;">Search</button>
    </form>
  </div>
</nav>

    <a class="btn btn-primary m-3" href="/create">Buat Berita</a>

    <div class="container mt-3">
        @if (session('create'))
        <div class="alert alert-primary" role="alert">
            {{ session('create') }}
        </div>
      @endif
      @if (session('delete'))
        <div class="alert alert-danger " role="alert">
            {{ session('delete') }}
        </div>
      @endif
      @if (session('edit'))
        <div class="alert alert-info " role="alert">
            {{ session('edit') }}
        </div>
      @endif
        <table class="table table-striped">
            <thead>
                <tr>
                    <th><b>Id</b></th>
                    <th><b>Pembuat</b></th>
                    <th><b>Judul</b></th>
                    <th><b>Foto</b></th>
                    <th><b>Dibuat</b></th>
                    <th><b>Aksi</b></th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $row)
                <tr >
                    <td>{{$row->id}}</td>
                    <td>{{$row->penulis}}</td>
                    <td style="width:40vw;">{{$row->judul}}</td>
                    <td><img src="/berita/{{$row->foto}}" style="width:50px"></td>
                    <td>{{$row->created_at->format('d/m/Y')}}</td>
                    <td>
                        <a href="/edit/{{$row->id}}" class="btn btn-secondary">Edit</a>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modaldelete">
                            Hapus
                        </button>
                    </td>
                    <!-- Button trigger modal -->
                    

                    <!-- Modal -->
                    <div class="modal fade" id="modaldelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Peringatan!</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Apakah yakin ingin hapus berita ini?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <a href="/delete/{{$row->id}}" class="btn btn-danger">Hapus</a>
                        </div>
                        </div>
                    </div>
                    </div>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="ms-3">
        {{ $data->links() }}
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>