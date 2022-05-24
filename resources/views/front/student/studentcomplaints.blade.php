<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complaints</title>
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
    <div class="complaint page"> 
        <div  class="container w-75 m-auto py-5">  
            <h2 class="text-center "> Complaints</h2> 
            <section class="mb-4  border">
                <div class="row "> 
                    <div class="col-md-9 mb-md-0 mb-5 m-auto  py-5">
                    @include('front.inc.errors')
                        <form id="contact-form" name="contact-form" action="{{ route('student.complaintsForms')}}" method="POST">
                        @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <label for="name" class="">Your name :</label>
                                        <input type="text" id="name" value="{{ old('name')}}" name="name" class="form-control">  
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <label for="email" class="">To :</label>
                                        <input type="text" id="email" value="{{ old('email')}}" name="email" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-form mb-0">
                                        <label for="subject" class="">Subject :</label>
                                        <input type="text" id="subject" value="{{ old('subject')}}" name="subject" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-form">
                                        <label for="message">Your Complaint :</label>
                                        <textarea type="text" id="message" value="{{ old('message')}}" name="message" rows="4" class="form-control md-textarea"></textarea>
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
    <!-- FOOTER -->
    <footer>
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