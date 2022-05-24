
@extends('front.layout')


@section('content')
 <!-- bg -->
 <div class="bg mt-1">
        <!-- welcom -->
        <h1 class="element "></h1>
    </div>
   <!-- about -->
   <section id ="about" class="col-12 mt-5  container-fluid ">
       
       <!-- home -->
        <div class="row col-12 m-auto  pt-5  display-flex bgGradient "> 
         
            <!-- heading -->
            <h1> About College</h1>

            <!-- description -->
            <div class="pt-5 col-12 display-flex  ">
                    <div class='description pt-4 '>
                        <section class="wow slideInRight" data-wow-duration="2s" data-wow-delay="">
                            <h3>Fuclty Of Engineering For Girls</h3>
                            <h5>Establishment:-</h5>
                            <p> it was established in 1964. later,in 2003 ,a branchfor females was initiated</p>
                            
                            <h5>Departments for Girls:-</h5>
                            
                            <ul class="list-styled"> 
                              <li><a href="#Electrical">Electric Engineering</a>
                                <ul class="ml-4">
                                <li><a href="#Power">Power</a></li>
                                <li><a href="#Communication">Communication</a></li>
                              </ul>
                              </li>
            
                              <li> <a href="#ComputerScience">Systems and Computer Engineering </a> </li>
                              <li><a href="#Architecture">  Architectural Engineering</a> </li>
                              <li><a href="#UrbanPlanning"> Urban Planning Engineering</a> </li>
                            </ul>
                      </section>
                    
                    </div>            
                </div>  
        </div>


        <hr>
        <!-- departments -->
      
        <!--  Electrical-->
        <section id="Electrical" class=" row col-12 bgGradient  m-auto p-5 container-fluid">
            
            <!-- header -->
            <div  class="col-md-12 text-center  "> 
                <h2>Electrical  </h2> 
                <h2>Electrical depertment divided to : two section  </h2> 
            </div>
  

        <!--  content Power&Machine and Communication-->
               
        <!--  Power&Machine  -->
                <section id="Power" class="row col-12 " >
                     
                    <!-- header -->    
                    <div  class="col-md-12 text-center"> 
                        <h2> 1-Power&Machine  </h2> 
                    </div>

                    <!-- content  img & descripton -->     
                    <div class= "col-md-12 row pt-5">
                             <!-- img -->
                        <div  class="col-md-6 img ">
                            <div class="skitter skitter-large">
                                <ul>
                                    <li>
                                        <a href="#swapBlocks"><img src="{{ asset('uploads/electrical/power/2.JPG') }}" class="swapBlocks  img-fluid" /></a>
                                        <div class="label_text"></div>
                                    </li>
  
                                    <li>
                                        <a href="#swapBarsBack"><img src="{{ asset('uploads/electrical/power/3.JPG') }}" class="swapBarsBack  img-fluid" /></a>
                                        <div class="label_text"></div>
                                    </li>
  
                                    <li>
                                        <a href="#swapBarsBack"><img src="{{ asset('uploads/electrical/power/5.JPG') }}" class="swapBarsBack  img-fluid" /></a>
                                        <div class="label_text"></div>
                                    </li>
  
                                    <li>
                                        <a href="#swapBarsBack"><img src="{{ asset('uploads/electrical/power/6.JPG') }}" class="swapBarsBack  img-fluid" /></a>
                                        <div class="label_text"></div>
                                    </li>
                                </ul>
                            </div>
       
      
                        </div>

                         <!-- descripton -->
                         <div class='description col-md-6 p-2 mt-2'>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere quis rem corporis consequatur rerum
                            consectetur quasi voluptate, illo fugit quos cumque et dolor nisi blanditiis. Facilis voluptas amet at iure.
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos quis illo error, voluptate voluptate eum hic ea iusto eveniet
                            molestias optio nobis dignissimos, harum esse, eaque id sint reprehenderit omnis.
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et necessitatibus placeat amet facere accusamus culpa molestias
                            veniam omnis voluptatibus, consectetur maxime officiis voluptates laudantium iure soluta tenetur dolore deleniti doloremque.
                        </div>

                    </div>
                
                </section>
    
                <!--  Communication -->
                <section id="Communication" class="row col-12 " >

                    <!-- header -->     
                    <div  class="col-md-12 text-center"> 
                        <h2> 2-Communication  </h2> 
                    </div>

                         
                    <!-- content  img & descripton --> 
                    <div class= "col-md-12 row pt-5">
            
                        <!-- img -->            
                        <div  class="col-md-6 img ">
                            <div class="skitter skitter-large">
                                <ul>                
                                    <li>
                                        <a href="#cut"><img  src="{{ asset('uploads/electrical/comunication/1.JPG') }}" class="cut img-fluid" /></a>
                                        <div class="label_text"></div>
                                    </li>
                                    
                                    <li>
                                      <a href="#swapBlocks"><img src="{{ asset('uploads/electrical/comunication/2.JPG') }}" class="swapBlocks  img-fluid" /></a>
                                      <div class="label_text"></div>
                                    </li>

                                    <li>
                                      <a href="#swapBarsBack"><img src="{{ asset('uploads/electrical/comunication/3.JPG') }}" class="swapBarsBack  img-fluid" /></a>
                                      <div class="label_text"></div>
                                    </li>
                                 
                                </ul>    
                            </div>  
                        </div>

                         <!-- descripton -->
                         <div class='description col-md-6 p-2  mt-2'>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere quis rem corporis consequatur rerum
                            consectetur quasi voluptate, illo fugit quos cumque et dolor nisi blanditiis. Facilis voluptas amet at iure.
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos quis illo error, voluptate voluptate eum hic ea iusto eveniet
                            molestias optio nobis dignissimos, harum esse, eaque id sint reprehenderit omnis.
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et necessitatibus placeat amet facere accusamus culpa molestias
                            veniam omnis voluptatibus, consectetur maxime officiis voluptates laudantium iure soluta tenetur dolore deleniti doloremque.
                        </div>
                    </div>
   
                </section>
  
            </section>

            <hr>
        <!-- Systems and Computer Engineering -->
        <section id="ComputerScience" class=" row col-12  bgGradient m-auto p-5 container-fluid" >
          
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
                                    <a href="#swapBlocks"><img  src="{{ asset('uploads/computer_Science/1.JPG') }}" class="swapBlocks   "  width="630" height="440"/></a>
                                    <div class="label_text"></div>
                                </li>
                          
                                <li>
                                    <a href="#swapBlocks"><img src="{{ asset('uploads/computer_Science/2.JPG') }}" class="swapBlocks  " /></a>
                                    <div class="label_text"></div>
                                </li>

                                <li>                            
                                    <a href="#swapBarsBack"><img src="{{ asset('uploads/computer_Science/3.JPG') }}" class="swapBarsBack  " /></a>
                                    <div class="label_text"></div>
                                </li>

                                <li>                            
                                    <a href="#swapBarsBack"><img src="{{ asset('uploads/computer_Science/5.JPG') }}" class="swapBarsBack  " /></a>
                                    <div class="label_text"></div>
                                </li>
                
                            </ul>    
                        </div>
                    </div>
  
      
                <!-- descripton -->
                <div class='description col-md-6 p-2  mt-2'>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum repudiandae voluptatum in amet atque
                     asperiores ad deserunt labore rerum recusandae molestias itaque impedit omnis, officia culpa maiores 
                     porro commodi ullam!
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum repudiandae voluptatum in amet atque
                     asperiores ad deserunt labore rerum recusandae molestias itaque impedit omnis, officia culpa maiores 
                     porro commodi ullam!
                </div>
                </div>
            </div>
        </section>

        
        <hr>
        <!-- Architecture -->
        <section id="Architecture" class=" row col-12  bgGradient m-auto p-5 container-fluid" >
    
            <!-- header -->
            <div  class="col-md-12 text-center">   
                <h2> Architecture </h2> 
             </div>
             
             <!-- content img & descripton-->
             <div class="col-md-12 row pt-5 "  >
                    
                <!-- img -->    
                <div  class="col-md-6 img ">    
                    <div class="skitter skitter-large">
                        <ul>
                            <li>
                                <a href="#cut"><img src="{{ asset('uploads/Architecture/1.JPG') }}" class="cut img-fluid" /></a>
                                <div class="label_text"></div>
                            </li>
         
                            <li>
                                <a href="#swapBlocks"><img src="{{ asset('uploads/Architecture/2.JPG') }}" class="swapBlocks  img-fluid" /></a>
                                <div class="label_text"></div>
                            </li>
         
                            <li>
                                <a href="#swapBarsBack"><img src="{{ asset('uploads/Architecture/3.JPG') }}" class="swapBarsBack  img-fluid" /></a>
                                <div class="label_text"></div>
                            </li>
         
                            <li>
                                <a href="#swapBarsBack"><img src="{{ asset('uploads/Architecture/4.JPG') }}" class="swapBarsBack  img-fluid" /></a>
                                <div class="label_text"></div>
                            </li>
         
                            <li>
                                <a href="#swapBarsBack"><img src="{{ asset('uploads/Architecture/5.JPG') }}" class="swapBarsBack  img-fluid" /></a>
                                <div class="label_text"></div>
                            </li>
         
                            <li>
                                <a href="#swapBarsBack"><img src="{{ asset('uploads/Architecture/6.JPG') }}" class="swapBarsBack  img-fluid" /></a>
                                <div class="label_text"></div>
                            </li>
                        </ul>
        
                    </div>
                </div>

                 <!-- descripton -->
                 <div class='description col-md-6 p-2'>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere quis rem corporis consequatur rerum
                    consectetur quasi voluptate, illo fugit quos cumque et dolor nisi blanditiis. Facilis voluptas amet at iure.
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos quis illo error, voluptate voluptate eum hic a iusto eveniet
                    molestias optio nobis dignissimos, harum esse, eaque id sint reprehenderit omnis.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et necessitatibus placeat amet facere accusamus culpa molestias
                    veniam omnis voluptatibus, consectetur maxime officiis voluptates laudantium iure soluta tenetur dolore deleniti doloremque.
                </div>
                 
            </div>
        </section>


        <hr>
       <!--Urban Planning -->
        <section id="UrbanPlanning" class=" row col-12  bgGradient m-auto p-5 container-fluid" >
    
            <!-- header -->
            <div  class="col-md-12 text-center">   
                <h2> Urban Planning</h2> 
             </div>
             
             <!-- content img & descripton-->
             <div class="col-md-12 row pt-5 "  >
                    
                <!-- img -->    
                <div  class="col-md-6 img ">    
                    <div class="skitter skitter-large">
                        <ul>
                          <li>
                            <a href="#cut"><img  src="{{ asset('uploads/Urban Planning/1.JPG') }}" class="cut img-fluid" /></a>
                            <div class="label_text"></div>
                          </li>
                          <li>
                            <a href="#swapBlocks"><img src="{{ asset('uploads/Urban Planning/2.JPG') }}" class="swapBlocks  img-fluid" /></a>
                            <div class="label_text"></div>
                          </li>
                          <li>
                            <a href="#swapBarsBack"><img src="{{ asset('uploads/Urban Planning/3.JPG') }}" class="swapBarsBack  img-fluid" /></a>
                            <div class="label_text"></div>
                          </li>
                          
                        </ul>
                      </div>
                </div>

                 <!-- descripton -->
                 <div class='description col-md-6 p-2'>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere quis rem corporis consequatur rerum
                    consectetur quasi voluptate, illo fugit quos cumque et dolor nisi blanditiis. Facilis voluptas amet at iure.
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos quis illo error, voluptate voluptate eum hic a iusto eveniet
                    molestias optio nobis dignissimos, harum esse, eaque id sint reprehenderit omnis.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et necessitatibus placeat amet facere accusamus culpa molestias
                    veniam omnis voluptatibus, consectetur maxime officiis voluptates laudantium iure soluta tenetur dolore deleniti doloremque.
                </div>
                 
            </div>
        </section>



    </section>



    <!-- contact us -->
    <section id="contact">
        <!--Section heading-->
        <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
        <div class="container py-5">
            <div class="row">
    
            <!--Grid column-->
            <div class="col-md-9 mb-md-0 mb-5 ">
                @include('front.inc.errors')
                <form id="contact-form" name="contact-form" action="{{ route('front.message.contact') }}" method="post">  
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
            <div class="col-md-3 text-center">
                <ul class="list-unstyled mb-0">
                    <li><i class="fas fa-map-marker-alt fa-2x"></i>
                        <p>San Francisco, CA 94126, USA</p>
                      
                    </li>
    
                    <li><i class="fas fa-phone mt-4 fa-2x"></i>
                        <p>+ 01 234 567 89</p>
                    
                    </li>
    
                    <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                        <p>contact@mdbootstrap.com</p>
                       
                    </li>
                </ul>
            </div>
            <!--Grid column-->
        </div>
        </div>
    </section>
     
@endsection