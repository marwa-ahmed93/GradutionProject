@extends('front.student.layout')
@section('content')


 <!-- contact us -->
 <section id="contact" class="mt-5">
        <!--Section heading-->
        <div class="pt-5">
        <h2 class="h1-responsive col-md-5 col-sm-12 font-weight-bold text-center my-4">Contact us</h2>

        </div>
    <div class="container">
        <div class="row">

        <!--Grid column-->
        <div class="col-md-6">
                @include('front.inc.errors')
                <form class="mr-5" id="contact-form" name="contact-form" action="{{ route('front.message.contact') }}" method="post">  
                @csrf
                  <!--Grid row-->
                    <div class="row">
                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <label for="name" class="">Your name</label>
                                <input type="text" id="name" name="name" value="{{old('name')}}" class="form-control">
                            </div>
                        </div>
                        <!--Grid column-->
    
                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <label for="email" class="">Your email</label>
                                <input type="email" id="email" name="email" value="{{old('email')}}"  class="form-control">
                                
                            </div>
                        </div>
                        <!--Grid column-->
    
                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form mb-0">
                                <label for="subject" class="">Subject</label>
                                <input type="text" id="subject" name="subject" value="{{old('subject')}}"  class="form-control">
                            </div>
                        </div>
                    </div>
                    <!--Grid row-->
    
                    <!--Grid row-->
                    <div class="row">
                            <!--Grid column-->
                        <div class="col-md-12">
                            <div class="md-form">
                                <label for="message">Your message</label>
                                <textarea type="text" id="message" name="message" value="{{old('message')}}" rows="2" class="form-control md-textarea"></textarea>
                            </div>
                   <div class="text-center text-md-left py-5">
                    <div class="sendBtn">
                        <button id="send-btn" class="btn" type="submit">Send</button>
                        
                    </div>
                </div>       </div>
                    </div>
                    <!--Grid row-->
    
                </form>
                <!-- Send -->
                
                <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->

        
         <div class="col-md-6 ">
           <div> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.3257734479957!2d31.319904585556415!3d30.056195124973797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583e5708a11e59%3A0x9608668522f422c7!2z2YPZhNmK2Kkg2KfZhNmH2YbYr9iz2Kkg2KzYp9mF2LnYqSDYp9mE2KPYstmH2LEg2YHYsdi5INin2YTYqNmG2KfYqiDYqNin2YTZgtin2YfYsdip!5e0!3m2!1sar!2seg!4v1656587289737!5m2!1sar!2seg" width="100%" height="350" frameborder="0" style="border: 0px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
           </div>
           
        </div> 
        <!--Grid column-->
    </div>
    
    </div>

</section>
     
@endsection