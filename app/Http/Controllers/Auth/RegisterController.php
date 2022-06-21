<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use App\User;
use App\Student;
Use App\Professor;
Use App\Employee;
use DB;
use Image;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
   // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
//     protected function validator(array $data)
//     {
//         return Validator::make($data, [
//             'name' => ['required', 'string', 'max:255'],
//             'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
//             'password' => ['required', 'string', 'min:8', 'confirmed'],
//         ]);
//     }

    public function studentRegister()
    {
        return view('auth.register');
    }

    public function sortstudentRegister(Request $request)
    {

        $request['isBlocked'] = $request->has('isBlocked') &&  is_null($request['isBlocked']);

        $request['isActive'] = $request->has('isActive') &&  is_null($request['isActive']);

        
        //validation
        $data = $request->validate([
            //user validation
          'name' => 'required|string|max:191' ,
          'email' => 'required|string|max:191|unique:users,email' ,
          'password' => 'required|string|max:191' ,
  
          'code' => 'required|string|max:191' ,
          'img' => 'required|image|mimes:jpg,jpeg,png' ,
  
          'gender' => 'required|string|max:100' ,
          'role' => 'required|string|max:10000' ,
  
          'phone' => 'required|string|max:100' ,
          'birthDate' => 'required|string|max:10000' ,
  
          'socialState' => 'required|string|max:100' ,
          'city' => 'required|string|max:10000' ,
  
          'identityNumder' => 'required|string|min:1|max:100' ,
          'identityType' => 'required|string|max:10000' ,
  
          'isBlocked' => 'boolean|max:100' ,
          'isActive' => 'boolean|max:10000' ,   
           'eduEmail' => 'required|string|max:191|unique:students,eduEmail' ,
            'grade' => 'required|string|max:191' ,

        ]);


        // Create User

        $new_name = $data['img']->hashName();
        $file_path = 'images/' . $new_name;
        Image::make($data['img'])->resize(970,520)->save($file_path);

        DB::transaction(function() use ($data, $file_path){
            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'code' => $data['code'],
                'gender' => $data['gender'],
                'role' => $data['role'],
        
                'phone' => $data['phone'],
                'birthDate' => $data['birthDate'],
                'socialState' => $data['socialState'],
                'city' => $data['city'],
        
                'identityNumder' => $data['identityNumder'],
                'identityType' => $data['identityType'],
                'isBlocked' => $data['isBlocked'],
                'isActive' => $data['isActive'],
                'img'   => $file_path,
            ]);
        
            // Create Student
            Student::create([
                'user_id' => $user->id,
                'eduEmail' => $data['eduEmail'],
                'grade' => $data['grade']
            ]);      
        });

        return redirect(route('login.form'));
    }
    
    // Professor Register
    public function professorRegister()
    {
       return view('auth.profRegister');
    }
   public function sortprofessorRegister(Request $request)
   {
       
    $request['isBlocked'] = $request->has('isBlocked') &&  is_null($request['isBlocked']);

    $request['isActive'] = $request->has('isActive') &&  is_null($request['isActive']);
     //validation
     $data = $request->validate([
        //user validation
      'name' => 'required|string|max:191' ,
      'email' => 'required|string|max:191|unique:users,email' ,
      'password' => 'required|string|max:191' ,

      'code' => 'required|string|max:191' ,
      'img' => 'required|image|mimes:jpg,jpeg,png' ,

      'gender' => 'required|string|max:100' ,
      'role' => 'required|string|max:10000' ,

      'phone' => 'required|string|max:100' ,
      'birthDate' => 'required|string|max:10000' ,

      'socialState' => 'required|string|max:100' ,
      'city' => 'required|string|max:10000' ,

      'identityNumder' => 'required|string|min:3|max:100' ,
      'identityType' => 'required|string|max:10000' ,

      'isBlocked' => 'required|boolean|max:100' ,
      'isActive' => 'required|boolean|max:10000' ,   
       'eduEmail' => 'required|string|max:191|unique:students,eduEmail' ,
        'salary' => 'required|max:191' ,

    ]);


// Create User

$new_name = $data['img']->hashName();
Image::make($data['img'])->resize(970,520)->save(public_path('images'.$new_name));
DB::transaction(function() use ($data, $new_name){
    $user = User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
        'code' => $data['code'],
        'gender' => $data['gender'],
        'role' => $data['role'],

        'phone' => $data['phone'],
        'birthDate' => $data['birthDate'],
        'socialState' => $data['socialState'],
        'city' => $data['city'],

        'identityNumder' => $data['identityNumder'],
        'identityType' => $data['identityType'],
        'isBlocked' => $data['isBlocked'],
        'isActive' => $data['isActive'],
        'img'   => $new_name,
    ]);

    // Create Professor
    Professor::create([
        'user_id' => $user->id,
        'eduEmail' => $data['eduEmail'],
        'salary' => $data['salary']
    ]);      
});

         return redirect(route('login.form'));

   }
// emoloyee Register
public function employeeRegister()
{
   return view('auth.empRegister');
}
  
public function sortemployeeRegister(Request $request)
{

     //validation
     
     $request['isBlocked'] = $request->has('isBlocked') &&  is_null($request['isBlocked']);

     $request['isActive'] = $request->has('isActive') &&  is_null($request['isActive']);
     $data = $request->validate([
        //user validation
      'name' => 'required|string|max:191' ,
      'email' => 'required|string|max:191|unique:users,email' ,
      'password' => 'required|string|max:191' ,

      'code' => 'required|string|max:191' ,
      'img' => 'required|image|mimes:jpg,jpeg,png' ,

      'gender' => 'required|string|max:100' ,
      'role' => 'required|string|max:10000' ,

      'phone' => 'required|string|max:100' ,
      'birthDate' => 'required|string|max:10000' ,

      'socialState' => 'required|string|max:100' ,
      'city' => 'required|string|max:10000' ,

      'identityNumder' => 'required|string|min:3|max:100' ,
      'identityType' => 'required|string|max:10000' ,

      'isBlocked' => 'required|boolean|max:100' ,
      'isActive' => 'required|boolean|max:10000' ,   
       'eduEmail' => 'required|string|max:191|unique:students,eduEmail' ,
        'salary' => 'required|max:191' ,

    ]);


// Create User

$new_name = $data['img']->hashName();
Image::make($data['img'])->resize(970,520)->save(public_path('images'.$new_name));
DB::transaction(function() use ($data, $new_name){
    $user = User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
        'code' => $data['code'],
        'gender' => $data['gender'],
        'role' => $data['role'],

        'phone' => $data['phone'],
        'birthDate' => $data['birthDate'],
        'socialState' => $data['socialState'],
        'city' => $data['city'],

        'identityNumder' => $data['identityNumder'],
        'identityType' => $data['identityType'],
        'isBlocked' => $data['isBlocked'],
        'isActive' => $data['isActive'],
        'img'   => $new_name,
    ]);

    // Create employee
    Employee::create([
        'user_id' => $user->id,
        'eduEmail' => $data['eduEmail'],
        'salary' => $data['salary']
    ]);      
});

         return redirect(route('login.form'));

}


}
