<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
class StudentRegiserController extends Controller
{
    //
    public function studentRegister()
    {
        return view('auth.register');
    }

    public function sortstudentRegister(Request $request)
    {
        $data = $request->validate
        ([  
            'name' => 'required|string|max:191' ,
            'email' => 'required|string|max:191' ,
        'password' => 'required|string|max:191' ,
        // 'grade' => 'required|string|max:191' ,
        // 'university_code' => 'required|integer|max:100' ,
        // 'academic_year' => 'required|string|max:10000' ,
        // 'img' => 'required|image|mimes:jpg,jpeg,png' ,
        ]);
    
                
        // $new_name = $data['img']->hashName();
        // Image::make($data['img'])->resize(970,520)->save(public_path('images'.$new_name));
        // $data['img'] = $new_name;
        User::create($data);
        return redirect(route('emp.view'));


    }
}
