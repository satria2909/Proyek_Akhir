@extends('layouts.app')
@section('content')
<html>
<head>
    <title>Update Data Buku</title>
    <meta name="csrf-token" content="{{ csrf_token() }}"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head> 
<body>
    <div class="container mt-4">
    @if (session('status'))
        <div class="alert alert-success"> 
            {{ session ('status') }}
        </div>
    @endif
    <div class="card">
        <div class="card-header text-center font-weight-bold">
            Update Data Buku
        </div>
        <div class="card-body">
            <form name="update-buku-form" id="update-buku-form" method="post" action="{{url('edit_bk')}}" enctype="multipart/form-data">
        @csrf
            <div class="form-group">
                <label for="id_buku">ID BUKU</label>
                <input type="text" id="id" name="id" class="form-control" required="" value="{{ $data->id }}" readonly> 
            </div>
            <div class="form-group">
                <label for="judul">JUDUL</label>
                <input type="text" id="judul" name="judul" class="form-control" required="" value="{{ $data->judul }}">
            </div>
            <div class="form-group">
                <label for="gambar">GAMBAR</label>
                <input type="file" id="gambar" name="gambar" class="form-control-file">
            </div>
            <div class="form-group">
                <label for="persediaan">PERSEDIAAN</label>
                <input type="text" id="persediaan" name="persediaan" class="form-control" required="" value="{{ $data->persediaan }}">
            </div>
            <div class="form-group">
                <label for="pengarang">PENGARANG</label>
                <input type="text" id="pengarang" name="pengarang" class="form-control" required="" value="{{ $data->pengarang }}">
            </div>
            <div class="form-group">
                <label for="penerbit">PENERBIT</label>
                <input type="text" id="penerbit" name="penerbit" class="form-control" required="" value="{{ $data->penerbit }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div> 
</div>
</body> 
</html>
@endsection