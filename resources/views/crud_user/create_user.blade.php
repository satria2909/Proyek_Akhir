@extends('layouts.app')
@section('content')
<html>
<head>
    <title>Create Data User</title>
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
            <p class="login-box-msg">Create Data User</p>

            <form method="post" action="{{ route('register') }}">
                @csrf

                <div class="input-group mb-3">
                    <input type="text" name="name"
                        class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}"
                        placeholder="Full name">
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-user"></span></div>
                    </div>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="input-group mb-3">
                    <input type="email" name="email" value="{{ old('email') }}"
                        class="form-control @error('email') is-invalid @enderror" placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-envelope"></span></div>
                    </div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="input-group mb-3">
                    <input type="password" name="password"
                        class="form-control @error('password') is-invalid @enderror" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-lock"></span></div>
                    </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="input-group mb-3">
                    <input type="password" name="password_confirmation" class="form-control"
                        placeholder="Retype password">
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-lock"></span></div>
                    </div>
                </div>
                        <button type="submit" class="btn btn-primary">Submit</button> 
            </form>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card --> 
</div>
</body> 
</html>
@endsection