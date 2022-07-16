<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> طلب الحصول علي شهادة مؤقتة  </title>    
    <link rel="stylesheet" href="{{ asset('graduate/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('graduate/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('graduate/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('graduate/css/solid.min.css')}}">
    <link rel="stylesheet" href="{{ asset('graduate/css/regular.min.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('graduate/css/gradForm.css')}}">
    

</head>
<body>
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ url('/graduate/student/show')}}">Back</a>
  </div>
</nav>
    <div class= "container  py-5  w-75 my-5">
        <div class="row">
            <div class="col-md-10  m-auto">
                <h1 class="text-center">   بيانات طلب الحصول علي شهادة مؤقتة </h1>
                @include('front.inc.errors')
                <form  action="{{ url('/graduate/tempCertificate/request')}}" method="post" class="mt-5">
                           @csrf
                  <div class="form-group row">

                    <div  class="col-md-6">
                      <div class="form-group">
                        <label>    اسم الخريج رباعي باللغة العربية </label>
                        <input id="nameInA" class="form-control" name="nameInA" type="text">
                      </div>
                    </div>
                    
                    <div  class="col-md-6">
                        <div class="form-group">
                          <label>  الاسم الخريج رباعي باللغة الانجليزية </label>
                          <input id="nameInE" class="form-control" name="nameInE" type="text">
                        </div>
                      </div>
                  </div>

                       <div class="form-group row">

                        <div  class="col-md-3  ">
                           <div class="form-group ">
                            <label> القسم </label>
                            <select id="department" name="department" class="form-control "  >
                              <option value="">  اختر القسم ...</option>
                              <option value="sce"> هندسة النظم والحاسبات </option>
                              <option value="electric">  الهندسة الكهربية </option>
                              <option value=" arch"> هندسة العمارة </option>
                              <option value=" planning"> هندسة التخطيط العمراني </option>
                            </select>
                           </div>
                        </div>

                        <div  class="col-md-3">
                          <div class="form-group " >
                            <label>  الشعبة</label>
                           <select id="grade" name="grade"  class="form-control" >
                            <option value="">  اختر الشعبة ...</option>
                            <option value="power">  هندسة القوي والالات الكهربية </option>
                            <option value="communication"> هندسة الالكترونيات والاتصالات الكهربية </option>
                           </select>
                          </div>
                        </div>

                        <div  class="col-md-3 ">
                            <div class="form-group " >
                              <label>  عام التخرج </label>
                              <input id="year" name="year"  class="form-control" type= "number" >
                            </div>
                          </div>
                          
                          <div class="col-md-3"> 
                             <div class="form-group ">
                              <label> الدور </label>
                              <select id="month" name="month" type="text" class="form-control"  >
                                <option value=""> اختر دور التخرج ...</option>
                                <option value="may"> مايو</option>
                                <option value="september"> سبتمبر </option>
                              </select>
                            </div>
                          </div> 
                        </div>

                        <div class=" form-group row">

                          <div class="col-md-4">
                            <div class="form-group" >
                              <label>   رقم جواز السفر / الرقم القومي </label>
                             <input id="id-card" name="id_card" class="form-control" type= "text" >
                             </div>
                          </div>

                          <div class="col-md-4">
                              <div class="form-group">
                                <label>  تاريخ صدور الهوية</label>
                                <input id="release-date" name="release_date" class="form-control" type="date">
                              </div>
                            </div>

                            <div class="col-md-4">
                              <div class="form-group">
                                <label> جهة صدور الهوية </label>
                                <input id="release-place" name="release_place" class="form-control" type="text" >
                              </div>
                            </div>
                          </div>

                     <div class="form-group row " >
                     <div class="col md-6">
                        <div class="form-group">
                          <label>  تاريخ الميلاد</label>
                          <input id="birth-date" name="birth_date" class="form-control" type="date">
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label>  جهة الميلاد</label>
                         <input id="birth-place" name="birth_place" class="form-control" type="text" >
                        </div>
                      </div>
                      </div>
                    
                     
                   
    
                      
                       <div class="form-group row">
                        <div class="col md-6">
                          <div class="form-group">
                            <label>   اسم مشروع التخرج باللغة العربية </label>
                            <input id="projectNameInArabic" class="form-control" name="projectNameInArabic" type= "text"> 
                          </div>
                        </div>

                        <div class="col md-6">
                          <div class="form-group" >
                            <label>   اسم مشروع  التخرج باللغة الانجليزية </label>
                           <input id="projectNameInE"  class="form-control" name="projectNameInE" type="text">
                          </div> 
                        </div>
                       </div>

                       <div class="form-group row " >
                        <div class="form-group col-md-6"  >
                          <label> رقم التليفون  </label>
                         <input id="phon-number"  class="form-control" name="phone_number" type="text">
                        </div>

                         <div class="form-group  col-md-6 " >
                          <label> عدد الشهادات المطلوبة  </label>
                          <input id="number"  class="form-control" name="certificate_number" type="number" >
                        </div>
                      </div>
 
        
                     <div class="  form-group row  my-5  "  >
                      <div class="col-md-12   text-center ">
                        <button  id="submitBtn" class="btn btn-primary p-2 col-md-3   " >  طلب </button>
                      </div> 
                    </div>
                    
                    </form>
                  </div>
            </div>
        </div>
     
        <script src="{{ asset('graduate/js/jquery-3.6.0.min.js')}}"></script>
        <script src="{{ asset('graduate/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('graduate/js/popper.min.js')}}"></script> 
        <script src="{{ asset('graduate/js/gradForm.js')}}"></script>
</body>
</html>