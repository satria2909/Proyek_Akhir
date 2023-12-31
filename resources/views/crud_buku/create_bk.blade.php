@extends('layouts.app')
@section('content')
<html>
<head>
    <title>Create Data Buku</title>
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
            Create Data Buku 
        </div>
        <div class="card-body">
            <form name="add-blog-post-form" id="add-blog-post-form" method="post" enctype="multipart/form-data" action="{{url('save_bk')}}">
        @csrf
            <div class="form-group">
                ID BUKU
                <input type="text" id="id" name="id" class="form-control" required=""> 
            </div>
            <div class="form-group">
                JUDUL
                <input type="text" id="judul" name="judul" class="form-control" required="">
            </div>
            <div class="form-group">
                GAMBAR
                <input type="file" id="gambar" name="gambar" class="form-control" accept="image/*">
            </div>
            <div class="form-group">
                PERSEDIAAN
                <input type="text" id="persediaan" name="persediaan" class="form-control" required="">
            </div>
            <div class="form-group">
                PENGARANG
                <input type="text" id="pengarang" name="pengarang" class="form-control" required="">
            </div>
            <div class="form-group">
                PENERBIT
                <input type="text" id="penerbit" name="penerbit" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div> 
</div>
</body> 
</html>
@endsection