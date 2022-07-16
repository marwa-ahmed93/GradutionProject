<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> view Student</title>

    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/css/solid.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/css/regular.min.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('admin/css/viewSt.css')}}">
</head>
<body >

 
         <!-- navbar -->   
         <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-between">
        <a class="navbar-brand" href="../home/home.html">
            <div class="logoBox">
                <img src="{{ asset('admin/img/logo.jpg')}}" alt="logo" width="60" height="60">
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="nav navbar-nav">
                 <!-- student -->
               <!-- Services treeee -->  
             
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLinkRight" role="button"
                  data-mdb-toggle="dropdown" aria-expanded="false">
                  Student
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLinkRight">
                <li>
                        <a class="dropdown-item" href="{{ route('emp.view') }}">View Student</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="{{ route('request.id_card') }}">ID Request</a>
                      </li>
                   
                  <li>
                    <a class="dropdown-item" href="{{ route('student.desires') }}"> Desires Reques &raquo; </a>
                    <ul class="dropdown-menu dropdown-submenu dropdown-submenu-left">
  
                      <li>
                        <a class="dropdown-item" href="{{ route('primary.view.desire') }}">Primary &raquo;</a>
                     
                      </li>

                      
                      <li>
                        <a class="dropdown-item" href="{{ route('electrical.view.desire') }}">Electrical &raquo;</a>
                    
                      </li>
                   
                  
                  
                    </ul>
                  </li>
             
                  <li>
                    <a class="dropdown-item" href="{{ route('student.desires') }}"> Time Tables &raquo; </a>
                    <ul class="dropdown-menu dropdown-submenu dropdown-submenu-left">
  
                      <li>
                        <a class="dropdown-item" href="#">Primary &raquo;</a>
                        <ul class="dropdown-menu dropdown-submenu dropdown-submenu-left">
                            <li>
                              <a class="dropdown-item" href="#">Upload</a>
                            </li>
                            <li>
                              <a class="dropdown-item" href="#">Edit</a>
                            </li>
                            
                          </ul>
                      </li>

                      
                      <li>
                        <a class="dropdown-item" href="#">System&Computer &raquo;</a>
                        <ul class="dropdown-menu dropdown-submenu dropdown-submenu-left">
                            <li>
                              <a class="dropdown-item" href="#">Upload</a>
                            </li>
                            <li>
                              <a class="dropdown-item" href="#">Edit</a>
                            </li>
                            
                          </ul>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">Electrical Engineering &raquo;</a>
                        <ul class="dropdown-menu dropdown-submenu dropdown-submenu-left">
                            <li>
                              <a class="dropdown-item" href="#">Upload</a>
                            </li>
                            <li>
                              <a class="dropdown-item" href="#">Edit</a>
                            </li>
                            
                          </ul>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">Architecture Engineering &raquo;</a>
                        <ul class="dropdown-menu dropdown-submenu dropdown-submenu-left">
                            <li>
                              <a class="dropdown-item" href="#">Upload</a>
                            </li>
                            <li>
                              <a class="dropdown-item" href="#">Edit</a>
                            </li>
                            
                          </ul>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">Urban Planning Engineering &raquo;</a>
                        <ul class="dropdown-menu dropdown-submenu dropdown-submenu-left">
                            <li>
                              <a class="dropdown-item" href="#">Upload</a>
                            </li>
                            <li>
                              <a class="dropdown-item" href="#">Edit</a>
                            </li>
                            
                          </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>

            
            <!-- test.. -->
                <!--Professor  -->
                <li class="nav-item ">
                    <a class="nav-link" href="{{ route('professor.view') }}">Professors</a>
                </li>
                <!--Employee  -->
                <li class="nav-item ">
                    <a class="nav-link" href="{{ route('employee.view') }}">Employee</a>
                </li>

                 <li class="nav-item ">
                    <a class="nav-link" href="{{ route('employee.view') }}">Add News</a>
                </li>

                 <li class="nav-item ">
                    <a class="nav-link" href="{{ route('complaints.view') }}">View Complaints</a>
                </li>
                <!--Edit profile  -->
                <li class="nav-item ">
                    <a class="nav-link" href="edit-profil.html">Edit profile</a>
                </li>
                <!-- logout -->
                <li class="nav-item">
                    <a class="nav-link" href="../home/home.html">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

<div class="d-flex justify-content-between mb-3">
<h6 class="m-3">Studnts / Edit / {{ $users->name }}</h6>
<a type="button" class="btn btn-primary m-3" href="{{ route('emp.view') }}">Back</a>

</div>
<div class="container m-5"> 
@include('front.inc.errors')
<form method="post" action="{{route('update.student')}}">
@csrf
<input type="hidden" name="id" value="{{ $users->id }}">
  <div class="mb-3">
    <label class="mt-3">Name</label>
    <input type="name" name="name" class="form-control" value="{{ $users->name }}" >

    <label class="mt-3">Email</label>
    <input type="email" name="email" class="form-control" value="{{ $users->email }}" >
 

 <label class="mt-3">User_id</label>
    <input type="number" name="user_id" class="form-control" value="{{ $users->student->user_id }}" >
  

   <label class="mt-3">Edu-email</label>
    <input type="email" name="user_id" class="form-control" value="{{ $users->student->eduEmail }}" >
  

   <label class="mt-3">Grade</label>
    <input type="number" name="user_id" class="form-control" value="{{ $users->student->grade}}" >

  </div>

  <button type="submit" class="btn btn-primary m-3">Submit</button>
</form>
</div>


   <script src="{{ asset('admin/js/jquery-3.6.0.min.js')}}"></script>
          <script src="{{ asset('admin/js/popper.min.js')}}"></script>
          <script src="{{ asset('admin/js/bootstrap.min.j')}}s"></script>
          <script src="{{ asset('admin/js/viewSt.js')}}"></script>
</body>

</html>