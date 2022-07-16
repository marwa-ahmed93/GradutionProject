@extends('front.student.layout')
@section('content')
       <!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Schedules </title>
    <link rel="stylesheet" href="{{ asset('services/css/brands.min.css') }}">
  <link rel="stylesheet" href="{{ asset('services/css/regular.min.css') }} ">
  <link rel="stylesheet" href=" {{ asset('services/css/solid.min.css') }}">
  <link rel="stylesheet" href=" {{ asset('services/css/fontawesome.min.css') }}">
  <link rel="stylesheet" href=" {{ asset('services/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('services/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('services/css/skitter.css') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
  <link rel="stylesheet" href="{{ asset('services/css/lastnews.css') }}">
  </head>
<body> -->

 



      <!-- navbar -->
  
      <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-between fixed-top">
    <a class="navbar-brand" href="{{ route('front.homepage') }}"> -->
        <!-- logo -->
        <!-- <div class="logoBox">
            <img src="{{ asset('home/img/logo.JPG') }}" alt="logo" width="60" height="60">
        </div>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">



    <ul class="nav navbar-nav"> -->
          
            <!-- home -->
            <!-- <li class="nav-item">
                <a class="nav-link active" href="{{ route('front.homepage') }}"><span class="sr-only">(current)</span> Home</a> 
            </li> -->

             <!-- about -->
             <!-- <li class="nav-item">
                <a  class="nav-link" href="#about">About</a>     
              </li> -->

                <!-- news -->
              <!-- <li class="nav-item ">
                <a class="nav-link active" href="../lastNews.html"><span class="sr-only">(current)</span> News</a> 
              </li> -->

               <!-- Complaints and suggestions -->
               <!-- <li class="nav-item ">
                <a class="nav-link active" href="{{ route('student.complaints') }}"><span class="sr-only">(current)</span> Complaints & petitions</a> 
              </li>

            <li class="nav-item dropdown login-dropdown ">
                <a class="nav-link dropdown-toggle login-toggel" data-bs-toggle="dropdown" href="#" role="button" aria-expanded=" false">Services</a>   
                <div class="dropdown-menu dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="{{ route('student.card') }}"><span class="sr-only">(current)</span> ID Card</a>
                  <a class="dropdown-item" href="{{ route('student.table') }}" ><span class="sr-only">(current)</span> Schedules </a>
                  <a class="dropdown-item" href="{{ route('student.payment') }}" ><span class="sr-only">(current)</span>Electronic payment</a>            
                  <a class="dropdown-item" href="{{ route('student.desires') }}"><span class="sr-only">(current)</span> Desires</a>
                 
              </div>         
              </li> -->
            <!-- contact us -->
            <!-- <li class="nav-item">
                <a class="nav-link" href="#contact"> Contact Us</a> 
            </li> -->


          <!-- login -->
          <!-- <li class="nav-item">
                <a class="nav-link" href="{{ route('login.form')}}">Login</a> 
            </li>
            
            
        
        </ul>
      </div>
    </nav> -->



<div class="container mb-5">
    <div class="row">
        <!-- اعدادي -->
        <div class="col-md-6  ">
        <div class="card"> 
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="img-fluid card-img-top" src="{{ asset('services/img/primtable.jpg') }}" alt="First slide">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="text-info card-title">(2022) جدول امتحانات اعدادي </h5>
                    </div>     
                  </div>
              </div> 
            </div>
          </div>

      
            
       
<!-- كهرباء -->
        <div class="col-md-6 ">
            <div class="card">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="img-fluid" src="{{ asset('services/img/elecT.jpg') }}" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="img-fluid" src="{{ asset('services/img/elecT1.jpg') }}" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="img-fluid" src="{{ asset('services/img/elecT2.jpg') }}" alt="Third slide">
                  </div>
                </div>
             </div>
            
            <div class="card-body text-center">
                <h5 class="text-info card-title ">(2022)جدول امتحانات  كهرباء</h5>
            </div>
        </div>
        </div>
        
        <!-- نظم -->
        <div class="col-md-6 ">
            <div class="card">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="img-fluid" src="{{ asset('services/img/comT2.jpg') }}" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="img-fluid" src="{{ asset('services/img/comt3.jpg') }}" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="img-fluid" src="{{ asset('services/img/comT4.jpg') }}" alt="Third slide">
                  </div>
                </div>
             </div>
            
            <div class="card-body text-center">
                <h5 class="text-info card-title ">(2022)جدول امتحانات نظم وحاسبات </h5>
            </div>
        </div>
    </div>
        

<!-- عمارة -->
<div class="col-md-6 ">
    <div class="card">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="img-fluid" src="{{ asset('services/img/arcT.jpg') }}" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="img-fluid" src="{{ asset('services/img/arcT2.jpg') }}" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="img-fluid" src="{{ asset('services/img/arcT3') }}" alt="Third slide">
          </div>
        </div>
     </div>
    
    <div class="card-body text-center">
        <h5 class="text-info  card-title">(2022)جدول امتحانات عمارة</h5>
    </div>
</div>
</div>



<!-- تخطيط -->
<div class="col-md-6 ">
    <div class="card">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="img-fluid" src="{{ asset('services/img/planing2.jpg') }}" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="img-fluid" src="{{ asset('services/img/planingT2.jpg') }}" alt="Second slide">
          </div>
        
        </div>
     </div>
    
    <div class="card-body text-center">
        <h5 class="text-info card-title">(2022)جدول امتحانات  تخطيط </h5>
    </div>
</div>


</div>

     </div>
    </div>

    @endsection
   <!-- FOOTER -->
   <!-- <footer>
      <div class=" footer">
          <div class="col-md-12 text-center"> -->
              <!-- ICONS -->
              <!-- <div class="icons">
                  <ul class=" mb-0 foot-list">
                      <li><i class="fas fa-map-marker-alt fa-2x"></i>
                          <p>Nacer city, Cairo, Egypt</p>
                      </li>
      
                      <li><i class="fas fa-phone mt-4 fa-2x"></i>
                          <p>+ 02 234 567 89</p>
                      </li>
      
                      <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                          <p>amrawy@azhar.eg.edu</p>
                      </li>
                  </ul>
              </div>
          </div>
          <div class="col-xs-12 text-center">
              <p class="mb-0">&copy Copyrights2022 </p>
          </div>
      </div>
          
  </footer>
      
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/jquery-3.6.0.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/jquery.easing.1.3.js"></script>
      <script src="js/jquery.skitter.min.js"></script>
      <script src="js/lastnews.js"></script> 
  </body>
  </html> -->