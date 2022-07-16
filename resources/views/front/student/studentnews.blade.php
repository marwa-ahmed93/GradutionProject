
@extends('front.student.layout')
@section('content')
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Last News </title>
    
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
        <ul class="nav navbar-nav "> -->
          
          <!-- home -->
            <!-- <li class="nav-item ">
                <a class="nav-link active" href="{{ route('front.homepage') }}"><span class="sr-only">(current)</span> Home</a> 
            </li> -->
             <!-- about -->
             <!-- <li class=" nav-item  ">
                <a  class="nav-link " href="{{ route('front.about') }}">About</a>     
              </li> -->
            <!-- news -->
            <!-- <li class="nav-item ">
                <a class="nav-link active" href="{{ route('student.news') }}"><span class="sr-only">(current)</span> News</a> 
            </li> -->
            <!-- Complaints and suggestions -->
            <!-- <li class="nav-item ">
                <a class="nav-link active" href="{{ route('student.complaints') }}"><span class="sr-only">(current)</span> Complaints & petitions</a> 
            </li> -->
            <!-- Services  treeee-->  
            <!-- <li class="nav-item dropdown">
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
              </li> -->
            <!-- contact us -->
            <!-- <li class="nav-item">
                <a class="nav-link" href="{{ route('front.message.view') }}"> Contact Us</a> 
            </li> -->
            <!-- login -->
            <!-- <li class="nav-item">
                <a class="nav-link" href="{{ route('login.form')}}"> Login</a> 
            </li> -->
            <!-- sign in -->
            <!-- <li class="nav-item">
                <a class="nav-link" href="#"> Sign in</a> 
            </li>   -->
        <!-- </ul>
      </div>
    </nav> -->

    


   <div class="container py-5 ">
    <div class="row">
        <div class="col-md-12 bgdanger text-center py-2 mt-5 " > last News</div>
        
        <!-- stepn  -->
        <div class="row col-12 p-5 mt-5 bg">
             <!-- img -->    
            <div  class="col-md-6 img ">    
                                <div class="skitter skitter-large">
                                    <ul>
                                      <li>
                                        <a href="#swapBlocks "><img  src="{{ asset('services/img/stepn1.jpg') }}" class="swapBlocks  img-fluid" /></a>
                                        <div class="label_text"></div>
                                      </li>
                                      <li>
                                        <a href="#swapBlocks"><img src="{{ asset('services/img/stepn2.jpg') }}" class="swapBlocks img-fluid" /></a>
                                        <div class="label_text"></div>
                                      </li>
                                      <li>
                                        <a href="#swapBarsBack"><img src="{{ asset('services/img/stepn3.jpg') }}" class="swapBarsBack  img-fluid" /></a>
                                        <div class="label_text"></div>
                                      </li>
                                    </ul>
                                  </div>
                        
            </div>
             <!-- descripton -->  
             <div class='description col-md-6  mt-5'>
                                <p style="text-align: justify">  
                                   <br> تم تكريم فريق ستيبن من معالي رئيس جامعة الأزهر الأستاذ الدكتور محمد المحرصاوي وبحضور عدد كبير من عمداء الكليات وأعضاء هيئة التدريس، وعلى رأسهم الدكتور هشام صبح عميد كلية هندسه بنات والدكتور محمد مهني عميد كلية هندسه بنين جامعة الأزهر. 
                                  وبعد توفيق من الله حصل فريق ستيبن على جائزة رابع أفضل مشروع على مستوى جامعة الأزهر الشريف في كل المجالات. 
                                     </p> 
             </div>
        </div>

        <!-- two -->  
          <div class= "col-md-12 row p-5 mt-5 bg">
            <!-- img -->
       <div  class="col-md-6 img ">
           <div class="skitter skitter-large">
               <ul>
                   <li>
                       <a href="#swapBlocks"><img src="{{ asset('services/img/st1.jpg') }}" class="swapBlocks  img-fluid" /></a>
                       <div class="label_text"></div>
                   </li>

                   <li>
                       <a href="#swapBarsBack"><img src="{{ asset('services/img/st2.jpg') }}" class="swapBarsBack  img-fluid" /></a>
                       <div class="label_text"></div>
                   </li>

                   <li>
                       <a href="#swapBarsBack"><img src="{{ asset('services/img/st3.jpg') }}" class="swapBarsBack  img-fluid" /></a>
                       <div class="label_text"></div>
                   </li>

                   <li>
                       <a href="#swapBarsBack"><img src="{{ asset('services/img/st4.jpg') }}" class="swapBarsBack  img-fluid" /></a>
                       <div class="label_text"></div>
                   </li>
               </ul>
           </div>


       </div>

        <!-- descripton -->
        <div class='description col-md-6  text-center mt-5'>
       
          <p style="text-align: justify; ">
     يوم التفوق العلمى</p>

     <p style="text-align: justify; ">  تحت رعاية عمداء الهندسة (بنين - بنات)</p>
            
        <p style="text-align: justify; ">  الاحد 15/5/2022 بالقاعة الكبرى بالكلية</p>
            
        <p style="text-align: justify; ">  تكريما لأبناء الكلية المتفوقين</p>
           
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
    
    <script src="{{ asset('services/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('services/js/popper.min.js') }}"></script>
    <script src="{{ asset('services/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('services/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('services/js/jquery.skitter.min.js') }}"></script>
    <script src="{{ asset('services/js/lastnews.js') }}"></script> 
</body>
</html> -->