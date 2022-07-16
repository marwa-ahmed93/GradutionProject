@extends('front.student.Graduate.layout')
@section('content')
  <div id="servies" class="icons mt-5">
        <div class="container pb-5">
      <h1 class="text-center">Graduate Services <i class="fa-solid fa-graduation-cap"></i></h1>

      <div class=" info pt-5">
      <ul>
        <li> برجاء التأكد من دفع كامل الرسوم والمستحقات المتعلفة بالدراسة وإستخراج الشهادة</li>
        <li>   تأكد من احضار صورة شخصية 4 × 6 رسميه عند القدوم لإستلام الشهادة</li>
        <li> قد يستغرق الطلب من 7 الي 14 يوم حتي ينتهي</li>
    </ul>
      </div>
      <!-- <div class="py-3">
        <p>برجاء التأكد من دفع كامل الرسوم والمستحقات المتعلفة بالدراسة وإستخراج الشهادة</p>
        <p> تأكد من احضار صورة شخصية 4 × 6 رسميه عند القدوم لإستلام الشهادة</p>
        <p>قد يستغرق الطلب من 7 الي 14 يوم حتي ينتهي</p>
        
      </div> -->
     
      <div class="row pb-5 text-center  parentt">
       
        <div class="col-xl-3 pt-5">
          <div class="around bg-light">
            <i class="fa-solid fa-user-graduate"></i>
            <div class="pt-4"> 
              <a href="{{ url('/graduate/tempCertificate/show')}}"><h6  class="pb-4" >  استخراج شهادة مؤقتة  </h6></a>
            </div>
          </div>
        </div>


     
        <div class="col-xl-3 pt-5">
          <div class="around bg-light">
            <i class="fa-solid fa-user-graduate"></i>
            <div class="pt-4"> 
              <a href="{{ url('/graduate/certificateEn/show')}}"><h6  class="pb-4">استخراج شهادة باللغة الإنجليزية</h6></a>
            </div>
          </div>
        </div>

     
        <div class="col-xl-3 pt-5">
          <div class="around bg-light">
            <i class="fa-solid fa-user-graduate"></i>
            <div class="pt-2"> 
              <a href="{{ url('/graduate/certificateAr/show')}}"> <h6 class="pb-3">طلب استخراج شهادة تدرج(خمس سنوات)باللغة العربية</h6></a>
            </div>
            </div>
          </div>

    
          <div class="col-xl-3 pt-5">
            <div class="around bg-light">
              <i class="fa-solid fa-user-graduate"></i>
              <div class="pt-2">
                <a href="{{ url('/graduate/gradeCertificate/show')}}"><h6  class="pb-3">طلب استخراج شهادة تدرج(خمس سنوات)باللغة الإنجليزية</h6></a>
              </div>
            </div>
          </div>
    

        </div>
       
      </div>
      
      </div>
      @endsection