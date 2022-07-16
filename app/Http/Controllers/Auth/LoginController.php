<?php
namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use App\User;
use App\Student;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // public function loginPage(){
    //     return view('auth.login');
    // }
    public function loginPage(){
        // $student=Student::where('id','=',$id)->first();
        return view('auth.login');
    }

    public function loginHandel(Request $request){
      $cred=array('email' => $request->email,"password"=> $request->password);
      if(Auth::attempt($cred) && Auth::User()->role=='student'){
          $id = auth()->User()->id;
          return redirect("/student/payment/$id");
         }
      elseif(Auth::attempt($cred) && Auth::User()->role=='professor'){
        return redirect('/student/view');
          }
    elseif(Auth::attempt($cred) && Auth::User()->role=='employee'){
        return redirect('/employee/home');
         }
    else
    {
        return back();
      }
 
    }
}
