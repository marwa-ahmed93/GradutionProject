  
@extends('front.student.layout')
@section('content')
        <!-- content -->
        <div class="page">
           
            <div class="container">
                <div class="d-flex justify-content-center"> 
                     <h2>Apply for your ID card here <i class="fa-solid fa-id-card"></i></h2>
              </div>
           
                <div class="border">
                @include('front.inc.errors')
                    <form action="{{ route('student.cardform')}}" method="post" class="myForm" enctype="multipart/form-data">
                    @csrf
                        <div class="row form pt-10 ">
                            <div class="col-md-8 col-sm-10 col-xs-12">
                       
                                        
                                    </div>
                                </div>  
                                <!-- name -->
                        <div class="form-group row mt-3">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" required autocomplete="new-name">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                     <!-- department -->
                   <div class="form-group row">
                            <label for="department" class="text-danager col-md-4 col-form-label text-md-right ">{{ __('Department') }}</label>

                            <div class="col-md-6">
                            <select name="department" class="form-control @error('department') is-invalid @enderror" name="department" value="{{ old('department') }}" required autocomplete="department" autofocus>
                           <option value="Primary">Primary</option>
                           <option value="SCE">SCE</option>
                           <option value="Electrical">Electrical Engineering</option>
                           <option value="Power">Power& Machine</option>
                           <option value="Comunication">Comunication</option>
                           <option value="Architecture">Architecture</option>
                           <option value="Urban Planning">Urban Planning</option>
                              </select>

                                @error('department')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> 


                             

                         <!-- grade -->
                          <div class="form-group row">
                            <label for="grade" class="text-danager col-md-4 col-form-label text-md-right ">{{ __('Grade') }}</label>

                            <div class="col-md-6">
                            <select class="form-control @error('grade') is-invalid @enderror" name="grade" value="{{ old('grade') }}" required autocomplete="grade" autofocus>
                            <option value="Pre">Primary</option>
                                        <option value="first">First</option>
                                        <option value="second">second</option>
                                        <option value="third">third</option>
                                        <option value="fourth">fourth</option>
                              </select>

                                @error('grade')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> 

                     <div class="form-group row mt-3">
                             <label for="Ucode" class="col-md-4 col-form-label text-md-right">{{ __('University code') }}</label>

                                <div class="col-md-6">
                                <input id="Ucode" type="number" class="form-control @error('university_code') is-invalid @enderror" name="university_code" required autocomplete="new-Ucode">

                                  @error('university_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                             <div class="form-group row mt-3">
                             <label for="academic-year" class="col-md-4 col-form-label text-md-right">{{ __('Academic year ') }}</label>

                                <div class="col-md-6">
                                <input id="academic-year" type="text" class="form-control @error('academic-year') is-invalid @enderror" name="academic_year" required autocomplete="new-academic-year">

                                  @error('academic-year')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                            
                        <div class="form-group row"> 
                            <label for="img" class="col-md-4 col-form-label text-md-right">{{ __('Img') }}</label>

                            <div class="col-md-6">
                                <input id="img" type="file" class="form-control @error('code') is-invalid @enderror" name="img" value="{{ old('img') }}" required autocomplete="img" autofocus>

                                @error('img')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <br>
                                 <!-- Send -->
                        
                        </div> 
                             
                        <div class="sendBtn d-flex justify-content-center mb-3">
                        <button id="send-btn" class="btn btn-primary" type="submit">Send</button>
                    
                    </div>
                        
                              
                            </div>    
                         
                        </div>
                    </form>
                </div>
            </div>
       
        </div>
        
        @endsection

    