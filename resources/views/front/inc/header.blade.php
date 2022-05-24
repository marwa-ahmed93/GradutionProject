<!-- <html>
<head>
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href=" {{ asset('front/css/all.min.css') }}"> 
    <link rel="stylesheet" href=" {{ asset('front/css/style.css') }}"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

@yield('styles')

</head>
<body> -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>

  <link rel="stylesheet" href="{{ asset('front/css/brands.min.css') }}">
  <link rel="stylesheet" href="{{ asset('front/css/regular.min.css') }} ">
  <link rel="stylesheet" href=" {{ asset('front/css/solid.min.css') }}">
  <link rel="stylesheet" href=" {{ asset('front/css/fontawesome.min.css') }}">
  <link rel="stylesheet" href=" {{ asset('front/css/all.min.css') }}">
  <link rel="stylesheet" href=" {{ asset('front/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('front/css/animate.css') }}">
  <link rel="stylesheet" href="{{ asset('front/css/skitter.css') }}">
  <link rel="stylesheet" href="{{ asset('front/css/home.css') }}">
</head>
<body>

   <!-- navbar -->
   <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-between fixed-top">
    <a class="navbar-brand" href="{{ route('front.homepage') }}">
        <!-- logo -->
        <div class="logoBox">
            <img src="{{ asset('uploads/logo/logo.JPG') }}" alt="logo" width="60" height="60">
        </div>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="nav navbar-nav">
          
          <!-- home -->
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('front.homepage') }}"><span class="sr-only">(current)</span> Home</a> 
            </li>
             <!-- about -->
             <li class="nav-item">
                <a  class="nav-link" href="#about">About</a>     
              </li>

            <!-- contact us -->
            <li class="nav-item">
                <a class="nav-link" href="#contact"> Contact Us</a> 
            </li>


 <!-- login -->
<li class="nav-item">
                <a class="nav-link" href="{{ route('home')}}">Login</a> 
            </li>
            <!-- login as -->  
            <!-- <li class="nav-item dropdown login-dropdown ">
              <a class="nav-link dropdown-toggle login-toggel" data-bs-toggle="dropdown" href="#" role="button" aria-expanded=" false"> Login As</a>   
              <div class="dropdown-menu dropdown-menu " aria-labelledby="navbarDropdownMenuLink"> -->
                <!-- <a class="dropdown-item " href="../st-login/login.html" target="_blank"> Admin</a> -->
                  <!-- <a class="dropdown-item "  href="" target="_blank">Employee </a>
                  <a class="dropdown-item "  href="" target="_blank">Professors</a>            
                  <a class="dropdown-item" href="" target="_blank" >Student</a> -->
                  <!-- <a class="dropdown-item" href="#" target="_blank">Graduated</a> -->
              <!-- </div>         
              </li>   -->
        </ul>
      </div>
    </nav>
