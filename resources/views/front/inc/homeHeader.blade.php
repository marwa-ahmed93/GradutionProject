<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>

  <link rel="stylesheet" href="{{ asset('home/css/brands.min.css') }}">
  <link rel="stylesheet" href="{{ asset('home/css/regular.min.css') }} ">
  <link rel="stylesheet" href=" {{ asset('home/css/solid.min.css') }}">
  <link rel="stylesheet" href=" {{ asset('home/css/fontawesome.min.css') }}">
  <link rel="stylesheet" href=" {{ asset('home/css/all.min.css') }}">
  <link rel="stylesheet" href=" {{ asset('home/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('home/css/animate.css') }}">
  <link rel="stylesheet" href="{{ asset('home/css/skitter.css') }}">
  <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
  <link rel="stylesheet" href="{{ asset('home/css/home.css') }}">

</head>
<body>
  
 <!-- navbar -->
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
        <ul class="nav navbar-nav ">
          
          <!-- home -->
            <li class="nav-item ">
                <a class="nav-link active" href="{{ route('front.homepage') }}"><span class="sr-only">(current)</span> Home</a> 
            </li>
             <!-- about -->
             <li class=" nav-item  ">
                <a  class="nav-link " href="{{ route('front.about') }}">About</a>     
              </li>
            <!-- news -->
            <li class="nav-item ">
                <a class="nav-link active" href="{{ route('student.news') }}"><span class="sr-only">(current)</span> News</a> 
            </li>
            <!-- Complaints and suggestions -->
            <li class="nav-item ">
                <a class="nav-link active" href="{{ route('student.complaints') }}"><span class="sr-only">(current)</span> Complaints & petitions</a> 
            </li>
            <!-- Services  treeee-->  
            <li class="nav-item dropdown">
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

                  <li><a class="dropdown-item" href="{{route('staff.show')}}">Staff Services</a></li>
                  <li><a class="dropdown-item" href="{{ route('graduate.student.show')}}">Graduate Services</a></li>
                  <li><a class="dropdown-item" href="{{route('staff.show')}}">Electronic Payment</a></li>
                </ul>
              </li>
            <!-- contact us -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('front.message.view') }}">Contact Us</a> 
            </li>
            <!-- login -->
                 @if(!Auth::check())
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login.form')}}">Login</a> 
            </li>
           
               
                @else
                @if(Auth::check())
             <li>
                        <a class="dropdown-item pt-2" role="button" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                   
                                    <!-- <a class="btn btn-sm btn-primary" href="{{ route('emp.view') }}">Back</a> -->

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                        </li>
                        @endif
                                @endif
            <!-- sign in -->
            <!-- <li class="nav-item">
                <a class="nav-link" href="#"> Sign in</a> 
            </li>   -->
        </ul>
      </div>
    </nav>