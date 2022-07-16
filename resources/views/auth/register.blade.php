@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
           <div class="card-header">{{ __('Register') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf
                        <!-- user name -->
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- user email -->
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- user password -->
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                       <!-- user password_confirm -->
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                 <!-- user code -->
              <div class="form-group row">
                            <label for="code" class="col-md-4 col-form-label text-md-right">{{ __('Code') }}</label>
                            <div class="col-md-6">
                                <input id="code" type="text" class="form-control @error('code') is-invalid @enderror" name="code" value="{{ old('code') }}" required autocomplete="code" autofocus>
                                @error('code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> 
                 <!-- user img -->
                  <div class="form-group row"> 
                            <label for="img" class="col-md-4 col-form-label text-md-right">{{ __('Img') }}</label>

                            <div class="col-md-6">
                                <input id="code" type="file" class="form-control @error('code') is-invalid @enderror" name="img" value="{{ old('img') }}" required autocomplete="img" autofocus>

                                @error('img')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> 
                   <!-- user gender -->
                  <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>
                            <div class="col-md-6">
                            <select name="gender" id="" class="form-control @error('code') is-invalid @enderror" name="gender" value="{{ old('gender') }}" required autocomplete="gender" autofocus>
                           <option value="famele">famele</option>
                           <option value="male">male</option>
                              </select> 
                                <!-- <input id="code" type="text" class="form-control @error('code') is-invalid @enderror" name="gender" value="{{ old('gender') }}" required autocomplete="gender" autofocus> -->

                               @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> 
          <!-- user role  -->
           <div class="form-group row">
                            <label for="role" class="text-danager col-md-4 col-form-label text-md-right ">{{ __('Role') }}</label>
                            <div class="col-md-6">
                            <select name="role" class="form-control @error('role') is-invalid @enderror" name="role" value="{{ old('role') }}" required autocomplete="role" autofocus>
                           <option value="student">student</option>
                           <option value="professor">professor</option>
                           <option value="employee">employee</option>
                              </select>
                                @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> 
                            <!-- user phone -->
                             <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>
                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> 
                            <!-- user birthDate  -->
                           <div class="form-group row">
                            <label for="birthDate" class="col-md-4 col-form-label text-md-right">{{ __('Birth_date') }}</label>

                            <div class="col-md-6">
                                <input id="birthDate" type="date" class="form-control @error('birthDate') is-invalid @enderror" name="birthDate" value="{{ old('birthDate') }}" required autocomplete="birthDate" autofocus>
                                @error('birthDate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> 
                           <!-- regiser socialState   -->
                          <div class="form-group row">
                            <label for="socialState" class="col-md-4 col-form-label text-md-right">{{ __('Social_state') }}</label>
                            <div class="col-md-6">
                          <select name="socialState" class="form-control @error('socialState') is-invalid @enderror" required>
                            <option value="single">single</option>
                            <option value="maried">maried</option>
                        </select>
                                @error('socialState')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> 
                     <!-- regiser city  -->
                     <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required autocomplete="city" autofocus>

                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> 
         <!-- regiser identityNumder   -->
         <div class="form-group row">
                            <label for="identityNumder" class="col-md-4 col-form-label text-md-right">{{ __('Identity_numder') }}</label>
                            <div class="col-md-6">
                                <input id="identityNumder" type="number" class="form-control @error('identityNumder') is-invalid @enderror" name="identityNumder" value="{{ old('identityNumder') }}" required autocomplete="identityNumder" autofocus>
                                @error('identityNumder')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> 
                          <!-- regiser identityType    -->
                        <div class="form-group row">
                            <label for="identityType" class="col-md-4 col-form-label text-md-right">{{ __('Identity_type') }}</label>
                            <div class="col-md-6">
                                <input id="identityType" type="text" class="form-control @error('identityType') is-invalid @enderror" name="identityType" value="{{ old('identityType') }}" required autocomplete="identityType" autofocus>
                                @error('identityType')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> 
                              <!-- regiser isBlocked    -->
                                 <div class="form-group row">
                            <label for="isBlocked" class="col-md-4 col-form-label text-md-right">{{ __('Is_blocked') }}</label>
                            <div class="col-md-6">
                                <input id="isBlocked" type="checkbox" class="form-control @error('isBlocked') is-invalid @enderror" name="isBlocked" value="{{ old('isBlocked') }}" autocomplete="isBlocked" autofocus>
                                @error('isBlocked')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> 
                            <!-- regiser isActive    -->
                          <div class="form-group row">
                            <label for="isActive" class="col-md-4 col-form-label text-md-right">{{ __('Is_active') }}</label>

                            <div class="col-md-6">
                                <input id="isActive" type="checkbox" class="form-control @error('isActive') is-invalid @enderror" name="isActive" value="{{ old('isActive') }}" autocomplete="isActive" autofocus>

                                @error('isActive')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> 
           <!-- eduEmail    -->
           <div class="form-group row">
                            <label for="eduEmail" class="col-md-4 col-form-label text-md-right">{{ __('Edu_email') }}</label>
                            <div class="col-md-6">
                                <input id="eduEmail" type="text" class="form-control @error('eduEmail') is-invalid @enderror" name="eduEmail" value="{{ old('eduEmail') }}" required autocomplete="eduEmail" autofocus>
                                @error('eduEmail')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> 
                           <!-- regiser grade   -->
                           <div class="form-group row">
                            <label for="grade" class="col-md-4 col-form-label text-md-right">{{ __('Grade') }}</label>
                            <div class="col-md-6">
                          <select name="grade" class="form-control @error('grade') is-invalid @enderror" name="grade" value="{{ old('grade') }}" required autocomplete="grade" autofocus>
                           <option value="primary">primary</option>
                           <option value="first">first</option>
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
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
