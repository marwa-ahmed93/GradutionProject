<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Student;
use DB;
use App\Id_card;
use App\Table;
use App\Primary_desier;
use App\Complaint;
use App\Electrical_desier;
class EmployeeController extends Controller
{
    //
    public function empHome(){
        return view('admin.empHome');
    }

   //view student
    public function viewStudent(){
        $data['users'] = User::select('id' , 'name' , 'email')->where('role', '=', 'student')->orderBy('id' , 'DESC')->get(); 
        return view('admin\studentds\viewStudent')->with($data);
          }
 
    public function editStudent($id){

     $data['users'] = User::findOrFail($id);
     return view('admin\studentds\editStudent')->with($data);
       }

    public function updateStudent(Request $request){

    $data = $request->validate([
     'name' => 'required|string|max:20',
     'email' => 'required|email'
         ]);

       User::findOrFail($request->id)->update($data);
         return back();
             }

     public function deleteStudent($id){
         User::findOrFail($id)->delete();
          return back();
                }

     //view idRequest
    public function viewIdRequest(){
        $data['id_cards'] = Id_card::select('id' , 'name' , 'department' , 'grade' , 'university_code' , 'academic_year' , 'img')
        ->orderBy('id' , 'DESC')->get(); 
        return view('admin\studentds\idRequest')->with($data);
          }

    //view professor
    public function viewProf(){
        $data['users'] = User::select('id' , 'name' , 'email')->where('role', '=', 'professor')->orderBy('id' , 'DESC')->get(); 
         return view('admin.professors.viewProf')->with($data);  
}

 public function editProf($id){

    $data['users'] = User::findOrFail($id);
    return view('admin.professors.editProf')->with($data);
 }

 public function updateProf(Request $request){

    $data = $request->validate([
     'name' => 'required|string|max:20',
     'email' => 'required|email'
    ]);
 }
 public function deleteProf($id){
    User::findOrFail($id)->delete();
     return back();
}

//view employee
public function viewEmp(){
    $data['users'] = User::select('id' , 'name' , 'email')->where('role', '=', 'employee')->orderBy('id' , 'DESC')->get(); 
    return view('admin.employees.viewEmp')->with($data);   
}

public function editEmp($id){

    $data['users'] = User::findOrFail($id);
    return view('admin.employees.editEmp')->with($data);
 }

 public function updateEmp(Request $request){

    $data = $request->validate([
     'name' => 'required|string|max:20',
     'email' => 'required|email'
    ]);
 }
 public function deleteEmp($id){
    User::findOrFail($id)->delete();
     return back();
}

public function search(Request $request)
{

    $keyword = $request->keyword;

    $users = DB::table('users')
                ->where('name', 'like', "%$keyword%")
                ->get();
 
    // $user = User::where('name' , 'LIKE' , '%Rama%')->get();
 
    return response()->json($users);

}
public function deleteIdRequest($id){
    Id_card::findOrFail($id)->delete();
     return back();
}


//schedular view form
public function schedulesView(){

    return view('admin\studentds\schedulesView');
    }

    public function schedulesViewupload(Request $request){
 
        $data = $request->validate([ 
            'name' => 'required|string|max:191' ,
            'img' =>'required',
            // 'img' => 'required|image|mimes:jpg,jpeg,png,gif,svg' ,
           'img.*' => 'mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);
        $path = Storage::put("public/services", $data['img']);
        $data['img'] = $path;
        
    
         
        // image
        if($request->hasFile('img')){
        $img = $request->file('img');
    
        $name = time().\Str::random(30).'.'.$img->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $img->move($destinationPath , $name);
        $imgName='images/'.$name; 
      
        }
    
        // if ($request->hasFile('img')) {
        //     $img = $request->file('img');
        //     foreach ($img as $files) {
        //         $destinationPath = public_path('/images');
        //         $file_name = time() . "." . $files->getClientOriginalExtension();
        //         $files->move($destinationPath, $file_name);
        //         $data[] = $file_name;
        //     }
        
        $tables=new Table();
        $tables->name=$request->name;
        $tables->img=$imgName;
        $tables->save();
        return redirect('/student/table');
        
        
        }
        //view primary desire
public function viewPrimaryDesire(){
    $primary_desiers =Primary_desier::get();
    return view('admin\studentds\viewPrimaryDesire',compact('primary_desiers'));
}

//delete primary desire
public function deleteDesire($id){
    Primary_desier::findOrFail($id)->delete();
    return back();
}
//view Electrical desire
public function viewElectricalDesire(){
    $electrical_desiers =Electrical_desier::get();
    return view('admin\studentds\viewElectricalDesire',compact('electrical_desiers'));
}
//delete electrical desire
public function deleteElectricalDesire($id){
    Electrical_desier::findOrFail($id)->delete();
    return back();
}
//view complaints
public function viewComplaints (){
$complaints =Complaint::get();
    return view('admin\viewComplaints',compact('complaints'));
}
//delete deletecomplaints
public function deletecomplaints($id){
    Complaint::findOrFail($id)->delete();
    return back();
}


    }





