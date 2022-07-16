<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affairs home</title>
    
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/css/solid.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/css/regular.min.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('admin/css/st-affair.css')}}">
</head>
<body>
     
       
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


 <div class="d-flex justify-content-center mt-5">
<a class="btn btn-sm btn-primary mb-4" href="{{ route('professor.form') }}">{{ __('Add_Professor') }}</a>

</div>
<input onkeyup="search(this.value)" class="form-control w-75 m-auto" type="text" py-3  placeholder="Search by Name " >

    <div class="container mt-5 ">

        <!-- search -->
          <!-- اول ما اشيل ايدي من ع الزرار -->
          <!-- <i class="fa-solid fa-magnifying-glass"> </i> -->
        
        </div>        
    
        <div  class="container">
            <table id="employeeList"  class=" table  m-4 py-5 ">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>

                    <th>user_id</th>
                    <th>eduEmail</th>
                    <th>Salary</th>
                    <th>Action</th>
                 
                    </tr>
                   </thead>
                   <tbody id="tableBody">
   
                   @foreach($users as $user)
               
                     <tr>
                     <th scope="row">{{ $loop->iteration }}</th>
                      <td>{{ $user->name }}</td>
                     <td>{{ $user->email }}</td>
                     <td>{{ $user-> professor->user_id}}</td>
                     <td>{{ $user-> professor->eduEmail}}</td>
                     <td>{{ $user-> professor->salary}}</td>
                     <td>
                     <a class="btn btn-sm btn-warning" href="{{ route('edit.professor' , $user->id) }}">Edit</a>
                     <a class="btn btn-sm btn-danger" href="{{ route('delete.professor' , $user->id) }}">Delete</a>
                     </td>
                   
                     </tr>
                
                     @endforeach
                </tbody>
    
            </table>
          </div>

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

    <script src="{{ asset('admin/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('admin/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{ asset('admin/js/popper.min.js')}}"></script>
    <script src="{{ asset('admin/js/st-affair.js')}}"></script>
</body>
</html>