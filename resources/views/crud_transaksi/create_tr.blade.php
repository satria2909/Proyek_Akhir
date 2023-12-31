@extends('layouts.app')
@section('content')
<html>
<head>
    <title>Create Data Transaksi</title>
    <meta name="csrf-token" content="{{ csrf_token() }}"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head> 
<body>
    @if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="container mt-4">
    @if (session('status'))
        <div class="alert alert-success"> 
            {{ session ('status') }}
        </div>
    @endif
    <div class="card">
        <div class="card-header text-center font-weight-bold">
            Create Data Transaksi 
        </div>
        <div class="card-body">
            <form name="add-blog-post-form" id="add-blog-post-form" method="post" enctype="multipart/form-data" action="{{url('save_tr')}}">
        @csrf
            <div class="form-group">
                ID
                <input type="text" id="id" name="id" class="form-control" required=""> 
            </div>
            <div class="form-group">
                ID BUKU
                <input type="text" id="id_buku" name="id_buku" class="form-control" required="">
            </div>
            <div class="form-group">
                ID PELANGGAN
                <input type="text" id="id_pelanggan" name="id_pelanggan" class="form-control" required="">
            </div>
            <div class="form-group">
                JUMLAH
                <input type="text" id="jumlah" name="jumlah" class="form-control" required="">
            </div>
            <div class="form-group">
                TOTAL HARGA
                <input type="text" id="total_harga" name="total_harga" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div> 
</div>
</body> 
</html>
@endsection