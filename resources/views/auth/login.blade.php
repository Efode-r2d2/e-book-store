
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>eBookStore</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('fonts')}}">
    </head>
    <body class="hold-transition login-page">
    <div class="login-box">
    <div class="login-logo">
        <h1>e<b>BookStore</b></h1>
    </div>

    <div class="card">
    <div class="card-body login-card-body">
    <p class="login-box-msg">Sign in to eBookStore</p>
    <form action="../../index3.html" method="post">
    <div class="input-group mb-3">
    <input type="email" class="form-control" placeholder="Email">
    <div class="input-group-append">
    <div class="input-group-text">
    <span class="fas fa-envelope"></span>
    </div>
    </div>
    </div>
    <div class="input-group mb-3">
    <input type="password" class="form-control" placeholder="Password">
    <div class="input-group-append">
    <div class="input-group-text">
    <span class="fas fa-lock"></span>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-8">

    </div>

    <div class="col-4">
    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
    </div>

    </div>
    </form>


    <p class="mb-1">
    <a href="forgot-password.html">I forgot my password</a>
    </p>
    </div>

    </div>
    </div>
    <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
