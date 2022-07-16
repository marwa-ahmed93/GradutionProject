<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Message;
class MessageController extends Controller
{
    //
    public function contact(Request $request){
        //     $validator = \Validator::make($request->all() ,
        //     [
        //       'name' => 'required|string|max:191' ,
        //       'email' => 'required|email|max:191' ,
        //       'subject' => 'required|string|max:191' ,
        //       'message' => 'required|string|max:10000' ,
                
        //     ]);
        
                $data = $request->validate([
          'name' => 'required|string|max:191' ,
          'email' => 'required|email|max:191' ,
          'subject' => 'required|string|max:191' ,
          'message' => 'required|string|max:10000' ,
          
                ]);
        
        // if($data->fails()){
        // return redirect('#contact')
        // ->withErrors($data)
        // ->withInput();
        // }
                Message::create($data);
                return back();
              }
              public function viewMessage(){
                      return view('front.viewContact');
              }
}
