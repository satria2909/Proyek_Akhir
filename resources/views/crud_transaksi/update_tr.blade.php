@extends('layouts.app')
@section('content')
<html>
<head>
    <title>Update Data Transaksi</title>
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
            Update Data Transaksi 
        </div>
        <div class="card-body">
            <form name="update-mahasiswa-form" id="update-mahasiswa-form" method="post" action="{{url('edit_tr')}}" enctype="multipart/form-data">
        @csrf
            <div class="form-group">
                <label for="id">ID</label>
                <input type="text" id="id" name="id" class="form-control" required="" value="{{ $data->id }}" readonly> 
            </div>
            <div class="form-group">
                <label for="id_buku">ID BUKU</label>
                <input type="text" id="id_buku" name="id_buku" class="form-control" required="" value="{{ $data->id_buku }}">
            </div>
            <div class="form-group">
                <label for="id_pelanggan">ID PELANGGAN</label>
                <input type="text" id="id_pelanggan" name="id_pelanggan" class="form-control" required="" value="{{ $data->id_pelanggan }}">
            </div>
            <div class="form-group">
                <label for="jumlah">JUMLAH</label>
                <input type="text" id="jumlah" name="jumlah" class="form-control" required="" value="{{ $data->jumlah }}">
            </div>
            <div class="form-group">
                <label for="total_harga">TOTAL HARGA</label>
                <input type="text" id="total_harga" name="total_harga" class="form-control" required="" value="{{ $data->total_harga }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div> 
</div>
</body> 
</html>
@endsection