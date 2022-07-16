<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>st-fees</title>
  <link rel="stylesheet" href="{{ asset('home/css/brands.min.css') }}">
  <link rel="stylesheet" href="{{ asset('home/css/regular.min.css') }} ">
  <link rel="stylesheet" href=" {{ asset('home/css/solid.min.css') }}">
  <link rel="stylesheet" href=" {{ asset('home/css/fontawesome.min.css') }}">
  <link rel="stylesheet" href=" {{ asset('home/css/all.min.css') }}">
  <link rel="stylesheet" href=" {{ asset('home/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('home/css/animate.css') }}">
  <link rel="stylesheet" href="{{ asset('home/css/skitter.css') }}">
  <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
  <link rel="stylesheet" href="{{ asset('home/css/home.css') }}">

     
 
    <link rel="stylesheet" href="https://cdn.moyasar.com/mpf/1.6.1/moyasar.css"> 
    <script src="https://polyfill.io/v3/polyfill.min.js?features=fetch"></script>
    <script src="https://cdn.moyasar.com/mpf/1.6.1/moyasar.js"></script>

   <!-- Moyasar Scripts -->
  
</head>
<body>
   <!-- navbar  -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-between fixed-top">
    <a class="navbar-brand" href="{{ route('front.homepage') }}">  
        <!-- logo -->
          <div class="logoBox">
            <img src="{{ asset('home/img/logo.JPG') }}" alt="logo" width="60" height="60">
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
                <a  class="nav-link" href="{{ route('front.about') }}">About</a>     
              </li>

                <!-- news -->
              <li class="nav-item ">
                <a class="nav-link active" href="{{ route('student.news') }}"><span class="sr-only">(current)</span> News</a> 
              </li>

               <!-- Complaints and suggestions -->
               <li class="nav-item ">
                <a class="nav-link active" href="{{ route('student.complaints') }}"><span class="sr-only">(current)</span> Complaints & petitions</a> 
              </li>

            <li class="nav-item dropdown login-dropdown ">
                <a class="nav-link dropdown-toggle login-toggel" data-bs-toggle="dropdown" href="#" role="button" aria-expanded=" false">Services</a>   
                <div class="dropdown-menu dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="{{ route('student.card') }}"><span class="sr-only">(current)</span> ID Card</a>
                  <a class="dropdown-item" href="{{ route('student.table') }}" ><span class="sr-only">(current)</span> Schedules </a>
                @php  $id = auth()->User()->id;  @endphp
                 <a class="dropdown-item" href="{{ route('student.payment',$id) }}" ><span class="sr-only">(current)</span>Electronic payment</a>            
                
                  <a class="dropdown-item" href="{{ route('student.desires') }}"><span class="sr-only">(current)</span> Desires</a>
                  <a class="dropdown-item" href="{{ route('student.desires') }}"><span class="sr-only">(current)</span> gradduatedForm</a>

              </div>         
              </li>
            <!-- contact us -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('front.message.view') }}"> Contact Us</a> 
            </li>
              <!-- login -->
              @if(!Auth::check())
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login.form')}}">Login</a> 
            </li>
           
                 @endif
             <li>
                        <a class="dropdown-item pt-2" role="button" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                   
                                    <!-- <a class="btn btn-sm btn-primary" href="{{ route('emp.view') }}">Back</a> -->

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                        </li>
      
             

        </ul>
      </div>
    </nav>

<div class="continer mt-5">
<div class="mysr-form"></div>
<script src="{{ asset('payment/js/moyasar-front.js')}}"></script>
</div>

 <!-- FOOTER -->
  <footer>
    <div class="footer fixed-bottom">
        <div class="col-md-12 text-center"> 
            <!-- ICONS -->
           <div class="icons">
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
    
    <script src="{{ asset('home/js/bootstrap.min.js') }} "></script>
    <script src="{{ asset('home/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('home/js/popper.min.js') }}"></script>
    <script src="{{ asset('home/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('home/js/typed.min.js') }}"></script>
    <script src="{{ asset('home/js/wow.min.js') }}"></script>
    <script src="{{ asset('home/js/jquery.skitter.min.js') }}"></script>
    <script src="{{ asset('home/js/home.js') }}"></script> 
</body>
</html> 



  <script src="{{ asset('student/js')}}/bootstrap.min.js"></script>
    <script src="{{ asset('student/js')}}/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('student/js')}}/popper.min.js"></script>
    <script src="{{ asset('student/js')}}/stFees.js"></script>
   
 

</body>
</html>