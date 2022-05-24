<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>st-desires</title>
    <link rel="stylesheet" href="{{ asset('student/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('student/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('student/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('student/css/solid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('student/css/regular.min.css') }}">
    <link rel="stylesheet" href="{{ asset('student/css/desires.css') }}">
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
        <!-- body -->
        <div class="page">
            <h2>Student desires</h2>
            <div class="container">
                <div class="border">
                    <form action="" class="myForm">
                        <div class="row form pt-10 ">
                            <div class="col-md-8 col-sm-10 col-xs-12">
                                <!-- Select Department -->
                                <div class=" form-groupSelect form-group sel-mr">
                                    <label for="department">Department :</label>
                                    <select class="form-control" name="department" id="department" onchange="showDiv(this)">
                                        <option value="" disabled selected hidden>Choose your department</option>
                                        <option value="Primary">Primary</option>
                                        <option value="Electrical">Electrical Engineering</option>
                                    </select>
                                </div>
                            </div>    
                        </div>
                    </form>
                </div>
            </div>

            <div class="container" id="primForm">
                <h2>Primary Engineering desires</h2>
                <div class="border">
                    <form action="" class="myForm">
                        <div class="row form pt-10 ">
                            <div class="col-md-8 col-sm-10 col-xs-12">
                                <div class="form-group ">
                                    <label for="name">Name :</label>
                                    <input class="form-control" type="text" name="name" id="name" required>
                                </div>
                                <div class="form-group ">
                                    <label for="nationalId">National ID :</label>
                                    <input class="form-control" type="number" name="nationalId" id="nationalId" required>
                                </div>
                                <div class="form-group ">
                                    <label for="seatNumber">Seat number :</label>
                                    <input class="form-control" type="number" name="seatNumber" id="seatNumber" required>
                                </div>
                                <!-- Desires -->
                                <div class="form-group desireForm">
                                    <h6>First desire :</h6>
                                        <div class="border2">
                                        <input type="radio" name="First-desire" id="sce1" value="System & Computer Engineering ">
                                        <label for="sce1">System & Computer Engineering </label><br>
                                        <input type="radio" name="First-desire" id="electrical1" value="Electrical Engineering">
                                        <label for="electrical1">Electrical Engineering</label><br>
                                        <input type="radio" name="First-desire" id="arch1" value="Architecture Engineering">
                                        <label for="arch1">Architecture Engineering</label><br>
                                        <input type="radio" name="First-desire" id="Urban1" value="Urban Planning Engineering">
                                        <label for="Urban1">Urban Planning Engineering</label>
                                    </div>
                                    <h6>Second desire :</h6>
                                    <div class="border2">
                                        <input type="radio" name="Second-desire" id="sce2" value="System & Computer Engineering ">
                                        <label for="sce2">System & Computer Engineering </label><br>
                                        <input type="radio" name="Second-desire" id="electrical2" value="Electrical Engineering">
                                        <label for="electrical2">Electrical Engineering</label><br>
                                        <input type="radio" name="Second-desire" id="arch2" value="Architecture Engineering">
                                        <label for="arch2">Architecture Engineering</label><br>
                                        <input type="radio" name="Second-desire" id="Urban2" value="Urban Planning Engineering">
                                        <label for="Urban2">Urban Planning Engineering</label>
                                    </div>
                                    <h6>Third desire :</h6>
                                    <div class="border2">
                                        <input type="radio" name="Third-desire" id="sce3" value="System & Computer Engineering ">
                                        <label for="sce3">System & Computer Engineering </label><br>
                                        <input type="radio" name="Third-desire" id="electrical3" value="Electrical Engineering">
                                        <label for="electrical3">Electrical Engineering</label><br>
                                        <input type="radio" name="Third-desire" id="arch3" value="Architecture Engineering">
                                        <label for="arch3">Architecture Engineering</label><br>
                                        <input type="radio" name="Third-desire" id="Urban3" value="Urban Planning Engineering">
                                        <label for="Urban3">Urban Planning Engineering</label>
                                    </div>
                                    <h6>Fourth desire :</h6>
                                    <div class="border2">
                                        <input type="radio" name="Fourth-desire" id="sce4" value="System & Computer Engineering ">
                                        <label for="sce4">System & Computer Engineering </label><br>
                                        <input type="radio" name="Fourth-desire" id="electrical4" value="Electrical Engineering">
                                        <label for="electrical4">Electrical Engineering</label><br>
                                        <input type="radio" name="Fourth-desire" id="arch4" value="Architecture Engineering">
                                        <label for="arch4">Architecture Engineering</label><br>
                                        <input type="radio" name="Fourth-desire" id="Urban4" value="Urban Planning Engineering">
                                        <label for="Urban4">Urban Planning Engineering</label>
                                    </div>
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
            <!-- Electrical Engineering -->
            <div class="container" id="electricForm">
                <h2>Electrical Engineering desires</h2>
                <div class="border">
                    <form action="" class="myForm">
                        <div class="row form pt-10 ">
                            <div class="col-md-8 col-sm-10 col-xs-12">
                                <div class="form-group ">
                                    <label for="name">Name :</label>
                                    <input class="form-control" type="text" name="name" id="name" required>
                                </div>
                                <div class="form-group ">
                                    <label for="nationalId">National ID :</label>
                                    <input class="form-control" type="number" name="nationalId" id="nationalId" required>
                                </div>
                                <div class="form-group ">
                                    <label for="seatNumber">Seat number :</label>
                                    <input class="form-control" type="number" name="seatNumber" id="seatNumber" required>
                                </div>
                                <!-- Desires -->
                                <div class="form-group desireForm">
                                    <h6>Your desire :</h6>
                                    <div class="border2">
                                        <input type="radio" name="desire" id="power" value="Electrical Power & Machine Engineering">
                                        <label for="power">Electrical Power & Machine Engineering </label><br>
                                        <input type="radio" name="desire" id="comunication" value="Comunication Engineering">
                                        <label for="comunication">Comunication Engineering</label><br>
                                    </div>    
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

<!-- .............................................................................. -->

        


        
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
    <script src="{{ asset('student/js')}}/desires.js"></script>

</body>
</html>