@extends('admin.layout')
@section('content')
<!-- <!DOCTYPE html>
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
<body > -->

 
         <!-- navbar -->   
         <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-between">
        <a class="navbar-brand" href="../home/home.html">
            <div class="logoBox">
                <img src="{{ asset('admin/img/logo.jpg')}}" alt="logo" width="60" height="60">
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="nav navbar-nav"> -->
                 <!-- student -->
               <!-- Services treeee -->  
<!--              
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
              </li> -->

            
            <!-- test.. -->
                <!--Professor  -->
                <!-- <li class="nav-item ">
                    <a class="nav-link" href="{{ route('professor.view') }}">Professors</a>
                </li> -->
                <!--Employee  -->
                <!-- <li class="nav-item ">
                    <a class="nav-link" href="{{ route('employee.view') }}">Employee</a>
                </li>

                 <li class="nav-item ">
                    <a class="nav-link" href="{{ route('employee.view') }}">Add News</a>
                </li>

                 <li class="nav-item ">
                    <a class="nav-link" href="{{ route('complaints.view') }}">View Complaints</a>
                </li> -->
                <!--Edit profile  -->
                <!-- <li class="nav-item ">
                    <a class="nav-link" href="edit-profil.html">Edit profile</a>
                </li> -->
                <!-- logout -->
                <!-- <li class="nav-item">
                    <a class="nav-link" href="../home/home.html">Logout</a>
                </li>
            </ul>
        </div>
    </nav> -->
 <!-- <div class="d-flex justify-content-center mt-5">
<a class="btn btn-sm btn-primary mb-4" href="{{ route('register.form') }}">{{ __('Add_student') }}</a>

</div> -->
<div class="mt-5">
<input name="keyword" id="keyword" class ="form-control w-75 m-auto" type = "text" py-3  placeholder="Search by Name" >
</div>
    <div class="container mt-5 ">

        <!-- search -->
          <!-- اول ما اشيل ايدي من ع الزرار -->
          <!-- <i class="fa-solid fa-magnifying-glass"> </i> -->

        </div>        
    
        <div  class="container">
            <table id="employeeList"  class= "table  m-4 py-5 ">
              <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>national_id</th>

                    <th>seat_number </th>
                    <th>your_desire</th>
                 
              
                    <th>Action</th>
                
                  </tr>
                </thead>
                <tbody id="tableBody">
                <div id="rimary_desiers" class="row">
                    @foreach($electrical_desiers as $electrical_desier)
                     
                  <tr>
                     <th scope="row">{{ $loop->iteration }}</th>
                     <td>{{ $electrical_desier->user_name }}</td>
                     <td>{{ $electrical_desier->user_nationalId }}</td>
                     <td>{{ $electrical_desier->user_seatNumber}}</td>
                     <td>{{ $electrical_desier->your_desire}}</td>
                     <td>
                     <a class="btn btn-sm btn-danger" href="{{ route('delete.electrical.desire' , $electrical_desier->id) }}">Delete</a>
                       </td>
                     
                   
                    </tr>
                
                     @endforeach 
                </div>
                </tbody>
    
            </table>
          </div>




@endsection




@section('script')
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script>

   $('#keyword').keyup(function(){
   let keyword = $(this).val()
   $('#users').empty()

   $.ajax({
      type: "GET" ,
      url:   "{{ route('emp.search') }}" + "?keyword=" + keyword ,
      contentType: false ,
      processData: false ,
      success: function(data)
      {
          dd($data);
        $('#users').empty()

        for(user of data)
          $('#users').append(`
            <tr>
                     <th scope="row"> ${loop.iteration} </th>
                      <td> ${user.name} </td>
                     <td> ${user.email} </td>
                     <td>${user.student.user_id} </td>
                     <td> ${user.student.eduEmail} </td>
                     <td> ${user.student.grade} </td>
                      
                    
                     <td>
                     <a class="btn btn-sm btn-info" href="{{ url('/editProf/user/{id}') }}/${user.id}">Edit</a>
                     <a class="btn btn-sm btn-danger" href="{{ url('/deleteProf/user/{id}') }}/${user.id}">Delete</a>
                     </td>
                   
              </tr>
          `)
      }

   })

})

</script>
@endsection()

          <!-- <script src="{{ asset('admin/js/jquery-3.6.0.min.js')}}"></script>
          <script src="{{ asset('admin/js/popper.min.js')}}"></script>
          <script src="{{ asset('admin/js/bootstrap.min.j')}}s"></script>
          <script src="{{ asset('admin/js/viewSt.js')}}"></script>
</body>

</html> -->