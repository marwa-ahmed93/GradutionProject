<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail</title>
    <link rel="stylesheet" href="{{ asset('student/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('student/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('student/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('student/css/solid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('student/css/regular.min.css') }}">
    <link rel="stylesheet" href="{{ asset('student/css/mail.css') }}">

    
</head>
<body>
        
    <!-- navbar -->
         <!-- navbar -->   
         <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-between">
        <a class="navbar-brand" href="{{ route('student.show')}}">
            <div class="logoBox">
                <img src="{{ asset('student/img/logo.JPG')}}" alt="logo" width="60" height="60">
            </div>
        </a>
        <h5 class="p-3"> {{ Auth::user()->name }}</h5> 
        <!-- <a id="navbarDropdown" class="nav-link" href="#" role="button"  aria-haspopup="true" aria-expanded="false" v-pre>
                                <p class="fs-1"> {{ Auth::user()->name }}</p>   
                                </a>  -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="nav navbar-nav ">
                <!-- home -->
                <li class="nav-item  active">
                    <a class="nav-link" href="{{ route('student.show')}}"><i class="fa-solid fa-house"></i><span class="sr-only">(current)</span></a>
                </li>
                <!-- user -->
                <li class="nav-item ">
                    <a class="nav-link" href="../user profile/user-profile.html"><i class="fa-solid fa-user"></i></a>
                </li>
                <!-- change pass -->
                <li class="nav-item">
                    <a class="nav-link" href="../change password/change-pass.html"><i class="fa-solid fa-key"></i></a>
                </li>
                
                <!-- logout -->
                <li>
                        <a class="dropdown-item pt-2 fa-solid fa-right-to-bracket" role="button" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <!-- {{ __('Logout') }} -->
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                        </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="..//home/home.html"><i class="fa-solid fa-right-to-bracket"></i></a>
                </li> -->
            </ul>
        </div>
    
       </nav>
    <div class="page">
        <!-- Sidebar -->
        <div class="cotaineer"> 
            <div class="sidebar">
                <div class="meua"> 
                    <li class="menu-item"><a href=""class="fa fa-home"></a>Home</li>
                    <li onclick="message()"class="menu-item "><a href="#" class="fa fa-paper-plane"></a> New message</li>
                    <li class="menu-item"><a href=""class="fa fa-inbox"></a>Inbox</li>
                    <li class="menu-item"><a href=""class="fa fa-arrow-right"></a>Sent</li>
                </div>
            </div>
        </div>   
        <div id="main" >
            <div  class="container m-auto py-5">   
                <section class="mb-4  px-2 border">
                    <div class="row "> 
                        <!--Grid column-->
                        <div class="col-md-9 mb-md-0 mb-5 m-auto  py-5">
                            <form id="contact-form"   name="contact-form" action="mail.php" method="POST">
                                <!--Grid row-->
                                <div class="row">
                                    <!--Grid column-->
                                    <div class="col-md-6">
                                        <div class="md-form mb-0">
                                            <label for="name" class="">Your name :</label>
                                            <input type="text" id="name" name="name" class="form-control">  
                                        </div>
                                    </div>
                                    <!--Grid column-->
                                    <div class="col-md-6">
                                        <div class="md-form mb-0">
                                            <label for="email" class="">To :</label>
                                            <input type="text" id="email" name="email" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <!--Grid row-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="md-form mb-0">
                                            <label for="subject" class="">Subject :</label>
                                            <input type="text" id="subject" name="subject" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <!--Grid row-->
                                <div class="row">
                                    <!--Grid column-->
                                    <div class="col-md-12">           
                                        <div class="md-form">
                                            <label for="message">Your message :</label>
                                            <textarea type="text" id="message" name="message" rows="4" 
                                            class="form-control md-textarea"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="text-center text-md-left py-5 sendBtn">
                                <a id="send-btn" class="btn " onclick="document.getElementById('contact-form').submit();">Send
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div> 
        <!--tabs  -->
        <div   id="cut" class="side">
            <nav class="navbar bg-dark ">
                <span class="open-slide ">
                    <a href="#" onclick="openSlideMenu()">
                        <svg width="30" hight="50">
                            <path d="M0,5 30,5" stroke="#000"
                            stroke-width="5"/>
                                <path d="M0,14 30,14" stroke="#000"
                                stroke-width="5"/>
                                    <path d="M0,23 30,23" stroke="#000"
                                    stroke-width="5"/> 
                        </svg>
                    </a>
                </span>
            </nav>
            <div id="side-menu" class="side-nav"> 
                <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
                <a href="#">Home</a>
                <a href="#main"onclick="message()">Message</a>
                <a href="#">Inbox</a>
                <a href="#">Sent</a>
            </div>
        </div>
    </div> 
    <!-- FOOTER -->
    <footer >
        <div class=" footer">
            <div class="col-md-6 text-center"> 
                <!-- ICONS -->
                <div class="icons">
                    <!-- about -->
                    <a href="../About/about.html"><i class="fa-solid fa-user-group mx-2"></i>ABOUT</a>
                    <!-- contact us -->
                    <a href="/contact.html"><i class="fa-solid fa-envelope  mx-2"></i> Contact Us</a>   
                </div>
            </div>
        </div>
    </footer>  
    <script src="{{ asset('student/js')}}/bootstrap.min.js"></script>
    <script src="{{ asset('student/js')}}/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('student/js')}}/popper.min.js"></script>
    <script src="{{ asset('student/js')}}/mail.js"></script>
 
</body>
</html>
