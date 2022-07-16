<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>st-desires</title>
    <link rel="stylesheet" href="{{ asset('student/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('student/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('student/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('student/css/solid.min.css')}}">
    <link rel="stylesheet" href="{{ asset('student/css/regular.min.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('student/css/desires.css')}}">
</head>
<body>   <!-- navbar -->
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
                  <a class="dropdown-item" href="{{ route('student.payment') }}" ><span class="sr-only">(current)</span>Electronic payment</a>            
                  <a class="dropdown-item" href="{{ route('student.desires') }}"><span class="sr-only">(current)</span> Desires</a>
                 
              </div>         
              </li>
            <!-- contact us -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('front.message.view') }}"> Contact Us</a> 
            </li>


          <!-- login -->
          <li class="nav-item">
                <a class="nav-link" href="{{ route('login.form')}}">Login</a> 
            </li>
            
          
        
        </ul>
      </div>
    </nav>
        <!-- body -->
        <div class="page">
            <!-- <h2>Student desires</h2> -->

                   <div class="page">
            <h2>Student desires <img src="{{ asset('services/img/think.png')}}  " alt="thinking icon" width="50px" height="40px"></h2>
            <div class=" info">
                <p>If you are at Primary grade select <strong> Primary </strong> option to choose the major you desire to study between the following majors :</p>
                <ul>
                    <li>System & Computer Engineering</li>
                    <li>Electrical Engineering</li>
                    <li>Architecture Engineering</li>
                    <li>Urban Planning Engineering</li>
                </ul>
                <p>& if you are already at Electrical Engineering department select <strong>Electrical Engineering</strong> option to choose which major you want to specialize between the following majors: </p>
                <ul>
                    <li>Electrical Power & Machine Engineering </li>
                    <li>Comunication Engineering</li>
                </ul>
            </div>
            <div class="container">
                <div class="border">
                    <form action="#" method="post" class="myForm">
                        <div class="row form pt-10 ">
                            <div class="col-md-8 col-sm-10 col-xs-12"> 
                                <!-- Select Department -->
                               <div class=" form-groupSelect form-group sel-mr">
                                    <label class="bold" for="department">Department </label>
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

            <div class="container footerMar" id="primForm">
                <h2>Primary Engineering desires</h2>
                <div class="border">
                @include('front.inc.errors')
                    <form action="{{ route('primary.desires')}}" method="post" class="myForm">
                    @csrf
                        <div class="row form pt-10 ">
                            <div class="col-md-8 col-sm-10 col-xs-12">
                                <div class="form-group ">
                                    <label class="bold" for="name">Name </label>
                                    <input class="form-control" type="text" name="name" id="name" required>
                                </div>
                                <div class="form-group ">
                                    <label class="bold" for="nationalId">National ID </label>
                                    <input class="form-control" type="text" name="national_id" id="nationalId" required>
                                </div>
                                <div class="form-group ">
                                    <label class="bold" for="seatNumber">Seat number </label>
                                    <input class="form-control" type="number" name="seat_number" id="seatNumber" required>
                                </div>
                                <!-- Desires -->
                                <div class="form-group desireForm">
                                    <h6>First desire </h6>
                                    <select name="first_desire" class="form-select" aria-label="Default select example">
                                      
                                        <option value="System & Computer Engineering">System & Computer Engineering</option>
                                         <option value="Electrical Engineering">Electrical Engineering</option>
                                        <option value="Architecture Engineering">Architecture Engineering</option>
                                        <option value="Urban Planning Engineering">Urban Planning Engineering</option>
                                         </select>
                                         </div>
                                        <!-- <div class="border2">
                                        <input type="radio" name="first_desire" id="sce1" value="System & Computer Engineering ">
                                        <label for="sce1">System & Computer Engineering </label><br>
                                        <input type="radio" name="first_desire" id="electrical1" value="Electrical Engineering">
                                        <label for="electrical1">Electrical Engineering</label><br>
                                        <input type="radio" name="first_desire" id="arch1" value="Architecture Engineering">
                                        <label for="arch1">Architecture Engineering</label><br>
                                        <input type="radio" name="first_desire" id="Urban1" value="Urban Planning Engineering">
                                        <label for="Urban1">Urban Planning Engineering</label>
                                    </div> -->
                                    <div class="form-group desireForm">
                                    <h6>Second desire </h6>
                                    <!-- <div class="border2"> -->

                                        <select name="second_desire" class="form-select" aria-label="Default select example">
                                      
                                        <option value="System & Computer Engineering">System & Computer Engineering</option>
                                         <option value="Electrical Engineering">Electrical Engineering</option>
                                        <option value="Architecture Engineering">Architecture Engineering</option>
                                        <option value="Urban Planning Engineering">Urban Planning Engineering</option>
                                         </select>
                                              </div>
                                        <!-- <input type="radio" name="second_desire" id="sce2" value="System & Computer Engineering ">
                                        <label for="sce2">System & Computer Engineering </label><br>
                                        <input type="radio" name="second_desire" id="electrical2" value="Electrical Engineering">
                                        <label for="electrical2">Electrical Engineering</label><br>
                                        <input type="radio" name="second_desire" id="arch2" value="Architecture Engineering">
                                        <label for="arch2">Architecture Engineering</label><br>
                                        <input type="radio" name="second_desire" id="Urban2" value="Urban Planning Engineering">
                                        <label for="Urban2">Urban Planning Engineering</label> -->
                                    <!-- </div> -->
                                    <div class="form-group desireForm">
                                    <h6>Third desire </h6>
                                    <select name="third_desire"  class="form-select" aria-label="Default select example">
                                      
                                        <option value="System & Computer Engineering">System & Computer Engineering</option>
                                         <option value="Electrical Engineering">Electrical Engineering</option>
                                        <option value="Architecture Engineering">Architecture Engineering</option>
                                        <option value="Urban Planning Engineering">Urban Planning Engineering</option>
                                         </select>
                                            </div>
                                    <!-- <div class="border2">
                                        <input type="radio" name="third_desire" id="sce3" value="System & Computer Engineering ">
                                        <label for="sce3">System & Computer Engineering </label><br>
                                        <input type="radio" name="third_desire" id="electrical3" value="Electrical Engineering">
                                        <label for="electrical3">Electrical Engineering</label><br>
                                        <input type="radio" name="third_desire" id="arch3" value="Architecture Engineering">
                                        <label for="arch3">Architecture Engineering</label><br>
                                        <input type="radio" name="third_desire" id="Urban3" value="Urban Planning Engineering">
                                        <label for="Urban3">Urban Planning Engineering</label>
                                    </div> -->
                                    <div class="form-group desireForm">
                                    <h6>Fourth desire </h6>
                                    <select name="fourth_desire"  class="form-select" aria-label="Default select example">
                                      
                                        <option value="System & Computer Engineering">System & Computer Engineering</option>
                                         <option value="Electrical Engineering">Electrical Engineering</option>
                                        <option value="Architecture Engineering">Architecture Engineering</option>
                                        <option value="Urban Planning Engineering">Urban Planning Engineering</option>
                                         </select>
                                             </div>
                                          
                                    <!-- <div class="border2">
                                        <input type="radio" name="fourth_desire" id="sce4" value="System & Computer Engineering ">
                                        <label for="sce4">System & Computer Engineering </label><br>
                                        <input type="radio" name="fourth_desiree" id="electrical4" value="Electrical Engineering">
                                        <label for="electrical4">Electrical Engineering</label><br>
                                        <input type="radio" name="fourth_desire" id="arch4" value="Architecture Engineering">
                                        <label for="arch4">Architecture Engineering</label><br>
                                        <input type="radio" name="fourth_desire" id="Urban4" value="Urban Planning Engineering">
                                        <label for="Urban4">Urban Planning Engineering</label>
                                    </div> -->
                            
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
            <div class="container footerMar" id="electricForm">
                <h2>Electrical Engineering desires</h2>
                <div class="border">
              
                    @include('front.inc.errors')
                    <form action="{{ route('electrical.desires')}}" method="post" class="myForm">
                    @csrf
                        <div class="row form pt-10 ">
                            <div class="col-md-8 col-sm-10 col-xs-12">
                             
                                <div class="form-group ">
                                    <label class="bold" for="name">Name </label>
                                    <input class="form-control" type="text" name="user_name" id="name" required>
                                </div>
                                <div class="form-group ">
                                    <label class="bold" for="nationalId">National ID </label>
                                    <input class="form-control" type="text" name="user_nationalId" id="nationalId" required>
                                </div>
                                <div class="form-group ">
                                    <label class="bold" for="seatNumber">Seat number </label>
                                    <input class="form-control" type="number" name="user_seatNumber" id="seatNumber" required>
                                </div>
                                <!-- Desires -->
                                <div class="form-group desireForm">
                                    <h6>Your desire </h6>
                                    
                                    <select name="your_desire" class="form-select" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="Electrical Power & Machine Engineering">Electrical Power & Machine Engineering</option>
                                    <option value="Comunication Engineering">Comunication Engineering</option>
                                              </select>
                                    <!-- <div class="border2">
                                        <input type="radio" name="desire" id="power" value="Electrical Power & Machine Engineering">
                                        <label for="power">Electrical Power & Machine Engineering </label><br>
                                        <input type="radio" name="desire" id="comunication" value="Comunication Engineering">
                                        <label for="comunication">Comunication Engineering</label><br>
                                    </div>     -->
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
        



    <script src="{{ asset('student/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('student/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{ asset('student/js/popper.min.js')}}"></script>
    <script src="{{ asset('student/js/desires.js')}}"></script>
</body>
</html>