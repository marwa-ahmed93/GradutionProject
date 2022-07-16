
@extends('front.layout')


@section('content')
 <!-- bg -->
<!-- bg -->
<div class="row" id="home">
        <div class="bg mt-1 col-md-12">
        <!-- welcom -->
        <h1 class="element"></h1>
        </div>
    </div>
 
    <!-- about -->
    <section id ="about" class="col-11 mt-4  container-fluid ">
       
       <!-- home -->
        <div class="row col-12 pt-4  display-flex bgGradient "> 
            <!-- heading -->
            <h1 class="header-about">About College</h1>
            <!-- description -->
            <div class="pt-4 col-12 display-flex  ">
                    <div class='description  '>
                        <section class="wow slideInRight" data-wow-duration="2s" data-wow-delay="">
                            <h3>Faculty Of Engineering For Girls</h3>
                            <h5>Establishment:-</h5>
                            <p class="black"> it was established in 1964. later,in 2003 ,a branchfor females was initiated</p>
                            
                            <h5>Departments for Girls:-</h5>
                            
                            <ul class="list-styled black"> 
                                <li ><a href="#Electrical">Electric Engineering :</a>
                                    <ul class="ml-4">
                                        <li><a href="#Power">Power</a></li>
                                        <li ><a href="#Communication">Communication</a></li>
                                    </ul>
                                </li>
                                <li > <a href="#ComputerScience">Systems and Computer Engineering </a> </li>
                                <li><a href="#Architecture">  Architectural Engineering</a> </li>
                                <li ><a href="#UrbanPlanning"> Urban Planning Engineering</a> </li>
                            </ul>
                        </section>
                    </div>            
            </div>  
        </div>


    
        <!-- departments -->
      
        <!--  Electrical-->
        <section id="Electrical" class=" row col-12 bgGradient   p-3 container-fluid">
            
            <!-- header -->
            <div  class="col-md-12 text-center  "> 
                <h2>Electrical : Power & Machine  </h2> 
               
            </div>
  

        <!--  content Power&Machine and Communication-->
               
        <!--  Power&Machine  -->
                <section id="Power" class="row col-12 " >
                     

                    <!-- content  img & descripton -->     
                    <div class= "col-md-12 row pt-5">
                             <!-- img -->
                        <div  class="col-md-6 img ">
                            <div class="skitter skitter-large">
                                <ul>
                                    <li>
                                        <a href="#swapBlocks"><img src="{{ asset('home/img/electrical/power/2.JPG') }}" class="swapBlocks img-fluid" width="100px" /></a>
                                        <div class="label_text"></div>
                                    </li>
  
                                    <li>
                                        <a href="#swapBarsBack"><img src="{{ asset('home/img/electrical/power/3.JPG') }}" class="swapBarsBack img-fluid" width="100px" /></a>
                                        <div class="label_text"></div>
                                    </li>
  
                                    <li>
                                        <a href="#swapBarsBack"><img src="{{ asset('home/img/electrical/power/5.JPG') }}" class="swapBarsBack  img-fluid"width="100px" /></a>
                                        <div class="label_text"></div>
                                    </li>
  
                                    <li>
                                        <a href="#swapBarsBack"><img src="{{ asset('home/img/electrical/power/6.JPG') }}" class="swapBarsBack  img-fluid" width="100px"/></a>
                                        <div class="label_text"></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                         <!-- descripton -->
                         <div class='description col-md-6 mt-4' >
                            <p style="text-align: justify; "> 
                            is a  subfield  of  electrical engineering that deals with the generation, transmission, distribution, and utilization of electric power, and the electrical apparatus connected to such systems, a significant fraction of the field is concerned with the conversion between AC and DC power and the development of specialized power systems such as those used in aircraft or for electric railway networks.</p>
                            
                        </div>

                    </div>
                
                </section>
    
                <!--  Communication -->
                <section id="Communication" class="row col-11 " >

                    <!-- header -->     
                    <div  class="col-md-12 text-center"> 
                        <h2> Electrical : Communication  </h2> 
                    </div>


               <!-- content  img & descripton --> 
               <div class= "col-md-12 row pt-5">
            
            <!-- img -->            
            <div  class="col-md-6 img ">
                <div class="skitter skitter-large">
                    <ul>                
                        <li>
                            <a href="#cut"><img  src="{{ asset('home/img/electrical/comunication/11.JPG')}}" class="cut img-fluid" width="80px" heigth="50px" /></a>
                            <div class="label_text"></div>
                        </li>
                        
                        <li>
                          <a href="#swapBlocks"><img src="{{ asset('home/img/electrical/comunication/22.JPG')}}" class="swapBlocks img-fluid" width="80px" heigth="50px" /></a>
                          <div class="label_text"></div>
                        </li>

                        <li>
                          <a href="#swapBarsBack"><img src="{{ asset('home/img/electrical/comunication/33.JPG')}}" class="swapBarsBack  img-fluid"width="80" heigth="50px"/></a>
                          <div class="label_text"></div>
                        </li>
                     
                    </ul>    
                </div>  
            </div>

                            <!-- descripton -->
                            <div class='description col-md-6'>
                           <p style="text-align: justify; ">is a branch of engineering that combines both electronics engineering and electrical engineering, The student will learn how to design telecommunications; such as telephone communications or communications using the Internet, and how to develop tools that serve different media, and this specialization includes many common materials; as electrical circuits, and digital design
                            
                            </p>
                        </div>
                    </div>
   
                </section>
  
            </section>
      <!-- Systems and Computer Engineering -->
      <section id="ComputerScience" class=" row col-12  bgGradient  p-3 container-fluid" >
          
          <!-- header -->
          <div  class="col-md-12 text-center"> 
                <h2>Systems and Computer Engineering </h2>
           </div>

           <!-- content img & descripton-->
          <div class="col-md-12 row pt-5 "  > 
             
              <!-- img -->
               <div  class="col-md-6 img ">
                  <div class="skitter skitter-large  ">
                      <ul>
                          <li>
                              <a href="#swapBlocks"><img  src="{{ asset('home/img/computer_Science/11.JPG')}}" class="swapBlocks" width="630" height="440"/></a>
                              <div class="label_text"></div>
                          </li>
                    
                          <li>
                              <a href="#swapBlocks"><img src="{{ asset('home/img/computer_Science/44.JPG')}}" class="swapBlocks  " /></a>
                              <div class="label_text"></div>
                          </li>

                          <li>                            
                              <a href="#swapBarsBack"><img src="{{ asset('home/img/computer_Science/33.JPG')}}" class="swapBarsBack  " /></a>
                              <div class="label_text"></div>
                          </li>

                          <li>                            
                              <a href="#swapBarsBack"><img src="{{ asset('home/img/computer_Science/55.JPG')}}" class="swapBarsBack  " /></a>
                              <div class="label_text"></div>
                          </li>
          
                      </ul>    
                  </div>
              </div>

                       <!-- descripton -->
                <div class='description col-md-6  '>
                   <p style="text-align: justify; ">is a combination between software and hardware Engineering, and networks of intelligent devices, It is solidly grounded in the theories and principles of computing, mathematics, science and engineering, and it applies these theories to solve technical problems through the design of computing hardware, software, networks and processes</p>
                </div>
                </div>
            </div>
        </section>
  
           
 <!-- Architecture -->
 <section id="Architecture" class=" row col-12  bgGradient  p-3 container-fluid" >
    
    <!-- header -->
    <div  class="col-md-12 text-center">   
        <h2> Architecture Engineering </h2> 
     </div>
     
     <!-- content img & descripton-->
     <div class="col-md-12 row pt-5 "  >
            
        <!-- img -->    
        <div  class="col-md-6 img ">    
            <div class="skitter skitter-large">
                <ul>
                    <li>
                        <a href="#cut"><img  src="{{ asset('home/img/Architecture/11.JPG')}}" class="cut img-fluid" /></a>
                        <div class="label_text"></div>
                    </li>
 
                    <li>
                        <a href="#swapBlocks"><img src="{{ asset('home/img/Architecture/22.JPG')}}" class="swapBlocks  img-fluid" /></a>
                        <div class="label_text"></div>
                    </li>
 
                    <li>
                        <a href="#swapBarsBack"><img src="{{ asset('home/img/Architecture/44.JPG')}}" class="swapBarsBack  img-fluid" /></a>
                        <div class="label_text"></div>
                    </li>
 
                    <li>
                        <a href="#swapBarsBack"><img src="{{ asset('home/img/Architecture/66.JPG')}}" class="swapBarsBack  img-fluid" /></a>
                        <div class="label_text"></div>
                    </li>
                </ul>

            </div>
        </div>

         <!-- descripton -->
         <div class='description col-md-6 '>
             <p style="text-align: justify; ">
                is the work of the architect starts from vision and construction, depending on civil societies, technology, economic, social and legal, which is concerned with each country, It is his duty to maintain a heritage and civilized nature of the country, an architectural student recognizes the vicinity of humanitarian and social sciences.
                </p>
           
        </div>
         
    </div>
</section>
        
              <!--Urban Planning -->
              <section id="UrbanPlanning" class=" row col-12  bgGradient  p-3 container-fluid" >
    
    <!-- header -->
    <div  class="col-md-12 text-center">   
        <h2> Urban Planning Engineering</h2> 
     </div>
     
     <!-- content img & descripton-->
     <div class="col-md-12 row pt-5 "  >
            
        <!-- img -->    
        <div  class="col-md-6 img ">    
            <div class="skitter skitter-large">
                <ul>
                  <li>
                    <a href="#cut"><img  src="{{ asset('home/img/Urban Planning/11.JPG')}}" class="cut img-fluid" /></a>
                    <div class="label_text"></div>
                  </li>
                  <li>
                    <a href="#swapBlocks"><img src="{{ asset('home/img/Urban Planning/22.JPG')}}" class="swapBlocks  img-fluid" /></a>
                    <div class="label_text"></div>
                  </li>
                  <li>
                    <a href="#swapBarsBack"><img src="{{ asset('home/img/Urban Planning/3.JPG')}}" class="swapBarsBack  img-fluid" /></a>
                    <div class="label_text"></div>
                  </li>
                  
                </ul>
              </div>
        </div>

        <!-- descripton -->
        <div class='description col-md-6 '>
            <p style="text-align: justify; ">is a technical and political process that is focused on the development and design of land use and the built environment, including air, water, and the infrastructure passing into and out of urban areas, such as transportation, communications, and distribution networks and their accessibility..
            Urban planning answers questions about how people will live in a given area, urban planners are also responsible for planning the efficient transportation of goods, the distribution of basic necessities such as water and electricity..</p>
            
        </div>
         
    </div>
</section>

</section>

   <!-- contact us -->
   <section id="contact" class="mt-3">
        <!--Section heading-->
    <h2 class="h1-responsive col-md-5 col-sm-12 font-weight-bold text-center my-4">Contact us</h2>
    <div class="container py-5">
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