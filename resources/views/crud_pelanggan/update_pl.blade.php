@extends('layouts.app')
@section('content')
<html>
<head>
    <title>Update Data Pelanggan</title>
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
            Update Data Pelanggan 
        </div>
        <div class="card-body">
            <form name="update-mahasiswa-form" id="update-mahasiswa-form" method="post" action="{{url('edit_pl')}}" enctype="multipart/form-data">
        @csrf
            <div class="form-group">
                <label for="id">ID</label>
                <input type="text" id="id" name="id" class="form-control" required="" value="{{ $data->id }}" readonly> 
            </div>
            <div class="form-group">
                <label for="nama">NAMA</label>
                <input type="text" id="nama" name="nama" class="form-control" required="" value="{{ $data->nama }}">
            </div>
            <div class="form-group">
                <label for="telpon">NO TELEPON</label>
                <input type="text" id="telpon" name="telpon" class="form-control" required="" value="{{ $data->telpon }}">
            </div>
            <div class="form-group">
                <label for="email">EMAIL</label>
                <input type="text" id="email" name="email" class="form-control" required="" value="{{ $data->email }}">
            </div>
            <div class="form-group">
                <label for="alamat">ALAMAT</label>
                <textarea name="alamat" class="form-control" required=""> {{ $data->alamat }} </textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div> 
</div>
</body> 
</html>
@endsection