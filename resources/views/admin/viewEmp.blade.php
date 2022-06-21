
@extends('admin.layout')
@section('content')


<!-- add student -->
<!-- <button class="btn btn-brimary"><a class="nav-link" href="{{ route('register.form') }}">{{ __('Add Student') }}</a></button> -->

<div class="container col-3 mt-5 ml-auto">
<button class="btn btn-brimary"><a href="{{ route('register.form') }}">{{ __('Add Student') }}</a></button>

<!-- <a class="nav-link" href="{{ route('register.form') }}">{{ __('Add Student') }}</a> -->

   
       <!-- <a href="formSt-affir.html"><button  id="addBtn"class="btn " type="submit">Add Student</button></a>  -->
    </div>

                    
               

    <!-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Add_student') }}</a>
                                </li>
                            @endif -->
    




    <div class="container mt-5 ">
   
        <!-- search -->
          <!-- اول ما اشيل ايدي من ع الزرار -->
          <input onkeyup="search(this.value)" class="form-control w-75 m-auto" type="text" py-3  placeholder="Search by Name " >
          <!-- <i class="fa-solid fa-magnifying-glass"> </i> -->
        
        </div>        
    
        <div  class="container">
            <table id="employeeList"  class=" table  m-4 py-5 ">
                <thead>
                    <th>Index</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>NationalId</th>
                    <th>Class</th>
                    <th>StudentId</th>
                    <th>Update</th>
                    <th>Delete</th>
                </thead>
                <tbody id="tableBody">
                   
                </tbody>
    
            </table>
          </div>







@endsection()