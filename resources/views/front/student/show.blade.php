
@extends('front.student.layout')


@section('content')
                <!-- content -->
        <section class="  bg-light page ">
            <div class="row  mt-4   ">
                
                <!-- news -->
                <div class=" col-md-4  col-sm-6  bg-danger border-light text-center parent  ">
                    <a href="{{ route('student.news')}}">
                        <div class="news item ">
                            <h4>Last News</h4>
                       </div>
                       <div class=" hover hoverNews  ">
                             <!--  icons-->
                             <i class="fa-solid fa-rss  py-1 fa-lg"></i>
                       </div>
                    </a>
                    </div>
             
                <!-- ID Card  -->
                <div class="col-md-4  col-sm-6  bg-danger border-light text-center parent ">
                    <a href="{{ route('student.card')}}">
                        <div class="item  idCard "> 
                            <h4>  ID Card </h4>
                        </div>
                        <div class="hover  hoverID     ">
                            <!--  icons-->
                            <i class="fa-solid fa-address-card py-1 fa-lg"></i>    
                        </div>
                    </a>
                </div>

                <!-- table -->
                <div class="  col-md-4  col-sm-6  bg-danger border-light text-center parent ">
                    <a href="{{ route('student.table')}}">
                        <div class=" item table  ">
                            <h4>Table</h4>
                        </div> 
                        <div class="hover hoverTable    ">
                        <!--  icons-->
                        <i class="fa-regular fa-calendar-days py-1 fa-lg"></i>  
                      </div>           
                    </a>
                  </div>

                  <!-- payment -->
                  <div class="  col-md-4  col-sm-6  bg-danger  border-light  text-center parent">
                    <a href="{{ route('student.payment')}}">
                        <div class="item  Payment"> 
                            <h4>Tuition fees </h4>
                        </div>  
                        <!--  icons-->
                        <div class="hover hoverPayment   ">
                            <i class="fa-solid fa-hand-holding-dollar  py-1 fa-lg"></i>
                         </div>                     
                        </a>
                  </div>

                   <!-- student care -->
                   <div class=" col-md-4  col-sm-6  bg-danger border-light text-center parent ">
                    <a href="{{ route('student.care')}}">  
                        <div class="item   studentCare"> 
                           <h4>Student Care</h4>
                        </div>
                        <!--  icons-->
                        <div class="hover hoverStudentCare  ">
                            <i class="fa-solid fa-hand-holding-medical  py-1 fa-lg"></i>  
                        </div>
                    </a>       
                </div>
         
                   <!-- desires -->
                   <div class="  col-md-4  col-sm-6  bg-danger border-light text-center parent ">
                    <a href="{{ route('student.desires')}}"> 
                         <div class="item  desires "> 
                            <h4> Desires</h4>
                        </div>
                        <!--  icons-->
                        <div class="hover hoverDesires   ">
                            <i class="fa-solid fa-file-signature  py-1 fa-lg"></i>
                        </div> 
                     
                    </a>  
                   </div>

                   <!-- mails -->
                   <div class=" col-md-4 col-sm-6  bg-danger border-light text-center parent">
                    <a href="{{ route('student.email')}}"> 
                        <div class="item   email "> 
                         <h4>  Email </h4>
                        </div>
                        <!--  icons-->
                         <div class="hover hoverEmail   ">
                             <i class="fa-solid fa-envelopes-bulk  py-1 fa-lg"></i>
                                            
                        </div>
                    </a> 
                   </div>

                     <!-- complaints  -->
                     <div class="  col-md-4  col-sm-6 bg-danger border-light text-center parent">
                        <a href="{{ route('student.complaints')}}">
                        
                            <div class="item   Help "> 
                            <h4>  Complaints </h4>
                            </div>
                            <!--  icons-->
                            <div class="hover  hoverHelp    ">
                                <i class="fa-regular fa-circle-question  py-1 fa-lg"></i>
                            </div>            
                        </a>
                     </div>
            </div>
        </section>
@endsection
