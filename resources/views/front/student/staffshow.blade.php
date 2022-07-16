<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login needed</title>
    <link rel="stylesheet" href="{{ asset('staff/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('staff/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('staff/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('staff/css/solid.min.css')}}">
    <link rel="stylesheet" href="{{ asset('staff/css/')}}regular.min.css">
    <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('staff/css/mustLogPage.css')}}">
</head>
<body>
    <!-- <a href="http://"></a> -->
<a href="{{ url('/')}}">
<button type="button" class="btn btn-info mt-5">Back to home</button>
</a>
    <div class="loginMessage">
        <img src="{{ asset('home/img/idea (1).png')}}" alt="" >
        <p class="text-center"> To continue you need to log in  first </p>
    </div>
    <div class="logBtn" >
        <a href="{{ route('login.form')}}"><button  id="logbtn" class="btn" type="">Login</button> </a> 
    </div>
</body>
</html>