<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/logo/logo-bontang-only.png') }}">
    <title>Admin Login</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <style>
        html, body {
            height: 100%;
            background-color: #efefef;
        }
    </style>

</head>
<body>
    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
          <div class="col-lg-6 col-md-12 ml-2 mr-2">
            <div class="row">
                <div class="col-12">
                    @if (session('message'))
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                        {{ session('message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                    @endif
                </div>
                <div class="col-12 card p-4">
                    <form method="POST" accept="{{ route('auth.admin.loginsubmit') }}">
                        @csrf
                        <div>
                            <img src="{{ asset('assets/img/logo/logo-bontang.png') }}">
                        </div>
                        <hr>
                        <div class="form-group">
                          <label>Email</label>
                          <input type="text" class="single-input" id="formGroupExampleInput" placeholder="Email" name="email" required>
                        </div>
                        <div class="form-group">
                          <label>Password</label>
                          <input type="password" class="single-input" id="formGroupExampleInput2" placeholder="Password" name="password" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="genric-btn info radius">Login</button>
                        </div>
                    </form>     
                </div>    
            </div>    
          </div>  
        </div>
    </div>


    <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>
</html>