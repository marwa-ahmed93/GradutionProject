<!DOCTYPE html>
<html lang="en">
    <head>
        <title> ABOUT</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="{{ asset('about/css/brands.min.css')}}">
        <link rel="stylesheet" href="{{ asset('about/css/regular.min.css')}}">
        <link rel="stylesheet" href="{{ asset('about/css/solid.min.css')}}">
        <link rel="stylesheet" href="{{ asset('about/css/fontawesome.min.css')}}">
        <link rel="stylesheet" href="{{ asset('about/css/all.min.css')}}">
        <link rel="stylesheet" href="{{ asset('about/css/animate.css')}}">
        <link rel="stylesheet" href="{{ asset('about/css/skitter.css')}}">
        <link rel="stylesheet" href="{{ asset('about/css/bootstrap.min.css')}}">
        <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
        <link rel="stylesheet" href="{{ asset('about/css/about.css')}}">
    </head>
    <body>

  <!-- navbar  -->
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



    <ul class="nav navbar-nav">  -->
          
            <!-- home -->
             <!-- <li class="nav-item">
                <a class="nav-link active" href="{{ route('front.homepage') }}"><span class="sr-only">(current)</span> Home</a> 
            </li> -->

             <!-- about -->
             <!-- <li class="nav-item">
                <a  class="nav-link" href="{{ route('front.about') }}">About</a>     
              </li> -->

                <!-- news -->
              <!-- <li class="nav-item ">
                <a class="nav-link active" href="{{ route('student.news') }}"><span class="sr-only">(current)</span> News</a> 
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
                  <a class="dropdown-item" href="{{ route('student.payment') }}" ><span class="sr-only">(current)</span> Tuition fees</a>            
                  <a class="dropdown-item" href="{{ route('student.desires') }}"><span class="sr-only">(current)</span> Desires</a>
                 
              </div>         
              </li> -->
            <!-- contact us -->
            <!-- <li class="nav-item">
                <a class="nav-link" href="{{ route('front.message.view') }}"> Contact Us</a> 
            </li> -->


          <!-- login -->
          <!-- <li class="nav-item">
                <a class="nav-link" href="{{ route('login.form')}}">Login</a> 
            </li>
            
         
        
        </ul>
      </div>
    </nav> -->
      
 <!-- navbar -->
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
        <ul class="nav navbar-nav ">
          
          <!-- home -->
            <li class="nav-item ">
                <a class="nav-link active" href="{{ route('front.homepage') }}"><span class="sr-only">(current)</span> Home</a> 
            </li>
             <!-- about -->
             <li class=" nav-item  ">
                <a  class="nav-link " href="{{ route('front.about') }}">About</a>     
              </li>
            <!-- news -->
            <li class="nav-item ">
                <a class="nav-link active" href="{{ route('student.news') }}"><span class="sr-only">(current)</span> News</a> 
            </li>
            <!-- Complaints and suggestions -->
            <li class="nav-item ">
                <a class="nav-link active" href="{{ route('student.complaints') }}"><span class="sr-only">(current)</span> Complaints & petitions</a> 
            </li>
            <!-- Services  treeee-->  
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLinkRight" role="button"
                  data-mdb-toggle="dropdown" aria-expanded="false">
                  Services
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLinkRight">
                  <li>
                    <a class="dropdown-item " id="l1" href="#">Under Graduate Services &raquo; </a>
                    <ul class="dropdown-menu dropdown-submenu dropdown-submenu-left" id="l2">
                      <li>
                        <a class="dropdown-item" href="{{ route('student.card') }}">ID Cards</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="{{ route('student.desires') }}">Desire Request</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="{{ route('student.table') }}">Time Table</a>
                      </li>

                    </ul>
                  </li>

                  <li><a class="dropdown-item" href="../prof/mustLogPage.html">Staff Services</a></li>
                  <li><a class="dropdown-item" href="../graduation/gradhome.html">Graduate Services</a></li>
                  <li><a class="dropdown-item" href="{{ route('student.payment') }}">Electronic Payment</a></li>
                </ul>
              </li>
            <!-- contact us -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('front.message.view') }}"> Contact Us</a> 
            </li>
            <!-- login -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login.form')}}"> Login</a> 
            </li>
            <!-- sign in -->
            <!-- <li class="nav-item">
                <a class="nav-link" href="#"> Sign in</a> 
            </li>   -->
        </ul>
      </div>
    </nav>
  <!-- about -->
  <section id ="about" class="col-11 mt-5  container-fluid ml-auto ">
       
    <!-- home -->
     <div class="row col-12 ml-auto  pt-5 mt-5  display-flex bgGradient text-light  "> 
       
      <!-- welcom -->
       <div class='col-md-12 ml-auto  mt-5 text-center text-light  '>
        <h1 class="element ">Faculty Of Engineering For Girls</h1>
       </div>
    <!-- content  img & descripton -->     
    <div class= "col-md-12 row  mt-5">
      <!-- img -->
      <div  class="col-md-6 img display-flex mb-4">
        <img  src="{{ asset('about/img/bg3.jpg')}}" alt="collegeImg" class="img-fluid" width="1000px" height="1000px">
      </div>
  
      <!-- descripton -->
      <div class=" col-6 display-flex text-light   ">
        <!-- description -->        
                <div class='description '>
                    <section class="wow slideInRight" data-wow-duration="2s" data-wow-delay="">
                        <!-- <h3 class="black"></h3> -->
                        <h5 class="black font">Establishment:-</h5>
                        <p class="black"> it was established in 1964. later,in 2003 ,a branchfor females was initiated</p>
                        <h5 class="black font">Departments for Girls:-</h5>
                        <ul class="list-styled black"> 
                          <li><a href="#Electrical">Electric Engineering :</a>
                              <ul class="ml-4">
                                <li><a href="#Power">Power</a></li>
                                <li><a href="#Communication">Communication</a></li>
                              </ul>
                          </li>
                          <li> <a href="#ComputerScience">Systems and Computer Engineering </a> </li>
                          <li><a href="#Architecture">  Architectural Engineering</a> </li>
                          <li><a href="#UrbanPlanning"> Urban Planning Engineering</a> </li>
                        </ul>
                    </section>
                </div>            
        
      </div>
    
    </div>
    </div>


  



    
    
    

<script href="{{ asset('about/js/bootstrap.min.js')}}"></script>
<script href="{{ asset('about/js/jquery-3.6.0.min.js')}}"></script>
<script href="{{ asset('about/js/popper.min.js')}}"></script>

<script href="{{ asset('about/js/jquery.easing.1.3.js')}}"></script>
<script href="{{ asset('about/js/typed.min.js')}}"></script>
<script href="{{ asset('about/js/wow.min.js')}}"></script>
<script href="{{ asset('about/js/jquery.skitter.min.js')}}"></script>


<script href="{{ asset('about/js/about.js')}}"></script> 
    </body>
    </html> 
