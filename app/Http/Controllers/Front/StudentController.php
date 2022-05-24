<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Student;
use App\Id_card;
use app\Complaint;
use Auth;
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
    $data = $request->validate
    ([  
        'name' => 'required|string|max:191' ,
    'department' => 'required|string|max:191' ,
    'grade' => 'required|string|max:191' ,
    'university_code' => 'required|integer|max:100' ,
    'academic_year' => 'required|string|max:10000' ,
    'img' => 'required|image|mimes:jpg,jpeg,png' ,
    ]);

            
    $new_name = $data['img']->hashName();
    Image::make($data['img'])->resize(970,520)->save(public_path('images'.$new_name));
    $data['img'] = $new_name;
    Id_card::create($data);
    return redirect(route('student.card'));
      
       
   
// Id_card::create($data);
//               return back();
            
}


public function studentnews(){

    return view('front.student.studentnews');
}
public function studenttable(){
    return view('front.student.studenttable');    
}

public function studentpayment(){
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


}


