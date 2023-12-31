@extends('layouts.app')
@section('content')
<html>
<head>
    <title>Update Data User</title>
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
            Update Data User 
        </div>
        <div class="card-body">
            <form name="update-mahasiswa-form" id="update-mahasiswa-form" method="post" action="{{url('edit_user')}}" enctype="multipart/form-data">
        @csrf
            <div class="form-group">
                <label for="id">ID</label>
                <input type="text" id="id" name="id" class="form-control" required="" value="{{ $data->id }}" readonly> 
            </div>
            <div class="form-group">
                <label for="nama">NAMA</label>
                <input type="text" id="name" name="name" class="form-control" required="" value="{{ $data->name }}">
            </div>
            <div class="form-group">
                <label for="email">EMAIL</label>
                <input type="text" id="email" name="email" class="form-control" required="" value="{{ $data->email }}" readonly>
            </div>
            <div class="form-group">
                <label for="password">PASSWORD</label>
                <input type="text" id="password" name="password" class="form-control" required="" >
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div> 
</div>
</body> 
</html>
@endsection