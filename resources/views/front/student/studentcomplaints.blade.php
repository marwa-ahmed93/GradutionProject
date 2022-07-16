  
@extends('front.student.layout')
@section('content')
    <div class="complaint page mt-5"> 
        <div  class="container w-75 m-auto py-5">  
        <h2 class="text-center "> Complaints & petitions <img src="{{ asset('services/img/problem.png')}}" alt="" width="50px" height="50px" class="mb-3"></h2> 

            <section class="mb-4  border">
                <div class="row "> 
                    <div class="col-md-9 mb-md-0 mb-5 m-auto  py-5">
                    @include('front.inc.errors')
                        <form id="contact-form" name="contact-form" action="{{ route('student.complaintsForms')}}" method="POST">
                        @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <label for="name" class="">Your name :</label>
                                        <input type="text" id="name" value="{{ old('name')}}" name="name" class="form-control">  
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <label for="email" class="">To :</label>
                                        <input type="email" id="email" value="{{ old('email')}}" name="email" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-form mb-0">
                                        <label for="subject" class="">Subject :</label>
                                        <input type="text" id="subject" value="{{ old('subject')}}" name="subject" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-form">
                                        <label for="message">Your Complaint :</label>
                                        <textarea type="text" id="message" value="{{ old('message')}}" name="your_Complaint" rows="4" class="form-control md-textarea"></textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-dark mt-3">Send</button>
                            <!-- <div class="text-center text-md-left py-5 sendBtn">
                            <a id="send-btn" class="btn " onclick="document.getElementById('contact-form').submit();">Send
                            </a>
                        </div> -->
                        </form>
                      
                    </div>
                </div>
            </section>
        </div>
    </div> 
    @endsection