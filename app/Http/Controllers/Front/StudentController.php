<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Student;
use App\Id_card;
use App\Complaint;
Use Image;
use Auth;
use DB;
use App\Primary_desier;
use App\Electrical_desier;
use App\Temp_certificate;
use App\certificateEn;
use Illuminate\Support\Facades\Storage;
// use Illuminate\Support\Facades\Redirect;
class StudentController extends Controller
{
    //
    public function studentshow(){

        return view('front.student.studentshow');
    }

public function studentcard(){
return view('front.student.studentcard');

}
public function cardform(Request $request){
     //dd($request->all());
    //validation
  
  $data = $request->validate([ 
    'name' => 'required|string|max:191' ,
    'department' => 'required|string|max:191' ,
    'grade' => 'required|string|max:191' ,
    'university_code' => 'required|integer' ,
    'academic_year' => 'required|string|max:10000' ,
    'img' => 'required|image|mimes:jpg,jpeg,png,gif,svg' ,
    ]);
$path = Storage::put("public/card", $data['img']);
$data['img'] = $path;

// try{
//     Id_card::create($data);
//     return Redirect::back()->with("success","تم الاضافه بنجاح") ;
// }catch (\Throwable $th){
//     return Redirect::back()->with("error","لم تتم الاضافه ") ;
// }

 
// image
if($request->hasFile('img')){
$img = $request->file('img');
$name = time().\Str::random(30).'.'.$img->getClientOriginalExtension();
$destinationPath = public_path('/images');
$img->move($destinationPath , $name);
$imgName='images/'.$name; 

}

$id_card=new Id_card();
$id_card->name=$request->name;
$id_card->department=$request->department;
$id_card->grade=$request->grade;
$id_card->university_code=$request->university_code;
$id_card->academic_year=$request->academic_year;
$id_card->img=$imgName;
$id_card->save();
return redirect('/id_card/view');


}


    // $new_name = $data['img']->hashName();
    // $file_path = 'images/' . $new_name;
    // Image::make($data['img'])->resize(970,520)->save($file_path);
            
    // $new_name = $data['img']->hashName();
    // Image::make($data['img'])->resize(970,520)->save(public_path('images'.$new_name));
    // $data['img'] = $new_name;

 
    // Id_card::create($data);
    // return redirect(route('student.card'));
    // Id_card::create($data);
    //   return back();
            



public function studentnews(){

    return view('front.student.studentnews');
}
public function studenttable(){
    return view('front.student.studenttable');    
}

public function studentpayment($id){
    return view('front.student.studentpayment');   
}

public function studentcare(){
    return view('front.student.studentcare');   
}

public function studentdesires(){

    return view('front.student.studentdesires'); 

}

public function studentemail(){

    return view('front.student.studentemail');    
}

public function studentcomplaints(){
    return view('front.student.studentcomplaints');
}

public function complaintsForms(Request $request){
//validation
$data = $request->validate([
    'name' => 'required|string|max:191' ,
    'email' => 'required|email|max:191' ,
    'subject' => 'required|string|max:191' ,
    'your_Complaint' => 'required|string|max:10000' ,
    
          ]);
          Complaint::create($data);
return back();
}

// primarydesires
public function primarydesires(Request $request){
    $data = $request->validate([
        'name' =>'required|string|max:191' ,
        'national_id' => 'required|string|max:191' ,
        'seat_number' => 'required|integer' ,
        'first_desire' => 'required|string' ,
        'second_desire' => 'required|string' ,
        'third_desire' => 'required|string' ,
        'fourth_desire' => 'required|string' ,
              ]);


              $Primary_desier=new Primary_desier();
      
              $Primary_desier->name=$request->name;

              $Primary_desier->national_id=$request->national_id;

              $Primary_desier->seat_number=$request->seat_number;

              $Primary_desier->first_desire=$request->first_desire;

              $Primary_desier->second_desire=$request->second_desire;

              $Primary_desier->third_desire=$request->third_desire;
              $Primary_desier->fourth_desire=$request->fourth_desire;
              $Primary_desier->save();
             return redirect('/primary/desire/view');

     

}



// electricaldesires

public function electricaldesires(Request $request){
   
    $data = $request->validate([
        // 'user_name' =>'required|string|max:191' ,
        // 'user_nationalId' => 'required|string|max:191' ,
        // 'user_seatNumber ' => 'required|integer' ,
        // 'your_desire' => 'required|string' ,
              ]);

//  dd(6);
            //   DB::enableQueryLog();
              $electrical_desier=new Electrical_desier();
              $electrical_desier->user_name=$request->user_name;
              $electrical_desier->user_name=$request->user_name;

              $electrical_desier->user_nationalId=$request->user_nationalId;

              $electrical_desier->user_seatNumber=$request->user_seatNumber;

              $electrical_desier->your_desire=$request->your_desire;

              $electrical_desier->save();
            //   dd(DB::getQueryLog());


            return redirect('/id_card/view');
           
          
            // Electrical_desier::create($data);
          //  return back();
     

}
// certitficat form
public function studentgraduateshow(){

    return view('front.student.Graduate.studentgraduateshow');

}

public function staffshow(){
    return view('front.student.staffshow');

}

  public function tempCertificate(){
    return view('front.student.Graduate.tempCertificate');
  }
  // certitficat request
public function tempCertificateRequest(Request $request){

    $data = $request->validate([
        'nameInA' =>    'required|string|max:191' ,
        'nameInE' =>    'required|string|max:191' ,
        'department' => 'required|string|max:191' ,
        'grade' =>       'required|string|max:191' ,
        'year' =>         'required|integer' ,
        'month' =>        'required|string|max:191' ,
        'id_card' => 'required|string|max:14' ,
        'release_date' => 'required|date' ,
        'release_place' => 'required|string|min:3' ,
        'birth_date' => 'required|date' ,
        'birth_place' => 'required|string|min:3' ,
        'projectNameInArabic' => 'required|string|min:3' ,
        'projectNameInE' => 'required|string|min:3' ,
        'phone_number' => 'required|string|max:11' ,
        'certificate_number' => 'required|string' ,
              ]);


              $temp_certificate=new Temp_certificate();
      
              $temp_certificate->nameInA=$request->nameInA;

              $temp_certificate->nameInE=$request->nameInE;

              $temp_certificate->department=$request->department;

              $temp_certificate->grade=$request->grade;

              $temp_certificate->year=$request->year;

              $temp_certificate->month=$request->month;
              $temp_certificate->id_card=$request->id_card;

              $temp_certificate->release_date=$request->release_date;
              $temp_certificate->release_place=$request->release_place;
              $temp_certificate->birth_date=$request->birth_date;
              $temp_certificate->birth_place=$request->birth_place;

              $temp_certificate->projectNameInArabic=$request->projectNameInArabic;
              $temp_certificate->projectNameInE=$request->projectNameInE;
              $temp_certificate->phone_number=$request->phone_number;
              $temp_certificate->certificate_number=$request->certificate_number;
              $temp_certificate->save();
             return redirect('/primary/desire/view');

}
  public function certificateEn(){
    return view('front.student.Graduate.certificateEn');
  }

  public function certificateEneRequest(Request $request){
      dd($request);
   $data = $request->validate([
        'grade' =>'required|string|max:191' ,
        'nameInA' =>    'required|string|max:191' ,
        'nameInE' =>    'required|string|max:191' ,
        'department' => 'required|string|max:191' ,
        'gradeD' =>       'required|string|max:191' ,
        'year' =>         'required|integer' ,
        'month' =>        'required|string|max:191' ,
        'id_card' => 'required|string|max:14' ,
        'release_date' => 'required|date' ,
        'release_place' => 'required|string|min:3' ,
        'birth_date' => 'required|date' ,
        'birth_place' => 'required|string|min:3' ,
        'projectNameInArabic' => 'required|string|min:3' ,
        'EgyptionOrNot' => 'required|boolean' ,
        'img_PreviousCertificateFile' => 'required|image|mimes:jpg,jpeg,png,gif,svg' ,
        'img_NationalIdFile' => 'required|image|mimes:jpg,jpeg,png,gif,svg' ,
        'img_PaymentReceipt' => 'image|mimes:jpg,jpeg,png,gif,svg' ,
             ]);

             $path = Storage::put("public/certificat_1", $data['img_PreviousCertificateFile']);
             $data['img_PreviousCertificateFile'] = $path;
               
             $path = Storage::put("public/certificat_2", $data['img_NationalIdFile']);
             $data['img_NationalIdFile'] = $path;

             $path = Storage::put("public/certificat_3", $data['img_PaymentReceipt']);
             $data['img_PaymentReceipt'] = $path;
              // try{
              //     Id_card::create($data);
              //     return Redirect::back()->with("success","تم الاضافه بنجاح") ;
              // }catch (\Throwable $th){
              //     return Redirect::back()->with("error","لم تتم الاضافه ") ;
              // }
              
               
              // image
              if($request->hasFile('img_PreviousCertificateFile')){
              $img = $request->file('img_PreviousCertificateFile');
              $name_1 = time().\Str::random(30).'.'.$img->getClientOriginalExtension();
              $destinationPath = public_path('/images');
              $img->move($destinationPath , $name_1);
              $imgName='images/'.$name_1; 
              }
              if($request->hasFile('img_NationalIdFile')){
                $img = $request->file('img_NationalIdFile');
                $name_2 = time().\Str::random(30).'.'.$img->getClientOriginalExtension();
                $destinationPath = public_path('/images');
                $img->move($destinationPath , $name_2);
                $imgName='images/'.$name_2; 
              }
                if($request->hasFile('img_PaymentReceipt')){
                    $img = $request->file('img_PaymentReceipt');
                    $name_3 = time().\Str::random(30).'.'.$img->getClientOriginalExtension();
                    $destinationPath = public_path('/images');
                    $img->move($destinationPath , $name_3);
                    $imgName='images/'.$name_3; 
              
              }
              $certificateEn=new certificateEn();

              $certificateEn->grade=$request->grade;
              $certificateEn->nameInA=$request->nameInA;

              $certificateEn->nameInE=$request->nameInE;

              $certificateEn->department=$request->department;

              $certificateEn->gradeD=$request->gradeD;

              $certificateEn->year=$request->year;

              $certificateEn->month=$request->month;
              $certificateEn->id_card=$request->id_card;

              $certificateEn->release_date=$request->release_date;
              $certificateEn->release_place=$request->release_place;
              $certificateEn->birth_date=$request->birth_date;
              $certificateEn->birth_place=$request->birth_place;

              $certificateEn->projectNameInArabic=$request->projectNameInArabic;

              $certificateEn->EgyptionOrNot=$request->EgyptionOrNot;
              $certificateEn->img_PreviousCertificateFile=$request->img_PreviousCertificateFile;
              $certificateEn->img_NationalIdFile=$request->img_NationalIdFile;
              $certificateEn->img_PaymentReceipt=$request->img_PaymentReceipt;
              $certificateEn->save();
             return redirect('/primary/desire/view');

  }
  public function certificateAr(){
    return view('front.student.Graduate.certificateAr');
  }
  public function gradeCertificate(){
    return view('front.student.Graduate.gradeCertificate');
  }
}


