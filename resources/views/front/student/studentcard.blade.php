<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>st-id-card</title>
    <link rel="stylesheet" href="{{ asset('student/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('student/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('student/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('student/css/solid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('student/css/regular.min.css') }}">
    <link rel="stylesheet" href="{{ asset('student/css/stId.css') }}">

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


        <!-- content -->
        <div class="page">
            <h2>Apply for your ID card here <i class="fa-solid fa-id-card"></i></h2>
            <div class="container">
                <div class="border">
                @include('front.inc.errors')
                    <form action="{{ route('student.cardform')}}" method="post" class="myForm" enctype="multipart/form-data">
                    @csrf
                        <div class="row form pt-10 ">
                            <div class="col-md-8 col-sm-10 col-xs-12">
                            <!-- <div class=" col-md-3 col-sm-3 col-xs-10"> -->
                                <div class="form-group">
                                    <div class="file-center">
                                        <div class="image-preview" id="imagePreview">
                                            <input type="file" name="inpFile" id="inpFile" hidden>
                                            <label for="inpFile">
                                                <img src="" alt="Image Preview" class="image-preview--image">
                                                <span class="image-preview--default-text"><i class="fa-solid fa-user photo"></i></span>
                                            </label>
                                            
                                        </div>
                                        
                                    </div>
                                </div>  
                                <div class="form-group ">
                                    <label for="name">Name :</label>
                                    <input class="form-control"  value="{{ old('name')}}" type="text" name="name" id="name" required>
                                </div>
                                <!-- Select Department -->
                                <div class=" form-groupSelect form-group sel-mr">
                                    <label for="department">Department :</label>
                                    <select class="form-control" name="department" id="department">
                                        <option value="Primary">Primary</option>
                                        <option value="SCE">SCE</option>
                                        <option value="Electrical">Electrical Engineering</option>
                                        <option value="Power">Power& Machine</option>
                                        <option value="Comunication">Comunication</option>
                                        <option value="Architecture">Architecture</option>
                                        <option value="Urban Planning">Urban Planning</option>
                                    </select>
                                </div>
                                <div class="form-group grade " id="grade">
                                    <label for="grade">Grade :</label>
                                    <select class="form-control" name="grade" id="grade">
                                        <option value="Pre">Primary</option>
                                        <option value="first">First</option>
                                        <option value="second">second</option>
                                        <option value="third">third</option>
                                        <option value="fourth">fourth</option>
                                        </select>
                                </div>
                                <div class="form-group ">
                                    <label for="Ucode">University code :</label>
                                    <input value="{{ old('number')}}" class="form-control" type="number" name="Ucode" id="Ucode" required>
                                </div>
                                <div class="form-group ">
                                    <label for="academic-year">Academic year :</label>
                                    <input vaiue="{{ old('academic-year')}} "class="form-control" type="datetime" name="academic-year" id="academic-year" placeholder="2022/2021">
                                </div>
                                <div class="form-group ">
                                    <label for="academic-year">Image :</label>
                                    <input class="form-control" type="file" name="image" id="academic-year" placeholder="2022/2021">
                                </div>
                                <!-- Send -->
                                <div class="sendBtn">
                                    <button  id="send-btn"class="btn" type="submit">Send</button>
                                </div>
                            </div>    
                        </div>
                    </form>
                </div>
            </div>
       
        </div>
        


        <!-- footer -->
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
    <script src="{{ asset('student/js')}}/stId.js"></script>
</body>
</html>