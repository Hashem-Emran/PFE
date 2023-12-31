@extends('welcome')

<head>
     
<link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <link rel="stylesheet" href="style.css">
</head>
<style>
    
    
    
</style>

@section('content')
<main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">

          <div class="col-md-8">
            @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}

        </div>
    @endif

    @if (session('info'))
    <div class="alert alert-info" role="alert">
        {{ session('info') }}

    </div>
    @endif
              <div class="card" id="form">
                  <div class="card-header">Login</div>
                  <div class="card-body">

                      <form action="{{ route('login.post') }}" method="POST" >
                          @csrf
                          <div class="form-group row">
                              <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                              <div class="col-md-6">
                                  <input  type="text" id="email_address" class="form-control" name="email" required autofocus>
                                  @if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                              <div class="col-md-6">
                                  <input type="password" id="password" class="form-control" name="password" required>
                                  @if ($errors->has('password'))
                                      <span class="text-danger">{{ $errors->first('password') }}</span>
                                  @endif
                              </div>
                          </div>


                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn" style="outline: none;box-shadow: none;" >
                                  Login
                              </button>
                              <div class="checkbox mt-2">
                                <label>
                                    <a href="{{ route('forget.password.get') }}" style="color:rgb(24, 147, 255);text-decoration: none" >Reset Password</a>
                                </label>
                            </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</main>
@endsection
