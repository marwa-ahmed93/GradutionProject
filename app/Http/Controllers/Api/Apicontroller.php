<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Payment_transaction;

class Apicontroller extends Controller
{

function webhook(Request $request){


}
function onCmpleted(Request $request){
    echo "welcome" ;
$description=$request->input('description');
//print_r($request->input('id'));
   $user_id = explode(" ", $description);
   $payment_transaction=new Payment_transaction;
   
    $payment_transaction->user_id=$user_id[1];

    $payment_transaction->payment_id=$request->input('id');

   // $payment_transaction->type=$request->input('type');
  
    $payment_transaction->price=$request->input('amount','/',100);

    $payment_transaction->status=$request->input('status');
    $result= $payment_transaction->save();
    if($result==1){
return "insert successfully";
    }
      

    // $data= $request->validate([
    //      'user_id'=>"required",
    //      'type'=>"required|string",
    //      'price'=>"required|integer",
    //      'status'=>"required|string",
    // ]);
    // $payment_transaction=new Payment_transaction();
    // $payment_transaction->user_id=$request->user_id;

    // $payment_transaction->type=$request->type;
  
    // $payment_transaction->price=$request->price;

    // $payment_transaction->status=$request->status;
    // $payment_transaction->save();


    // return response()->json(['user_id' => '$request->user_id', 'type' => '$request->type' ,
    //  'price' => '$request->price' , 'status' => '$request->status']);

    //$inserted = Payment_transaction::create($data);
          
//  return response()->json($inserted);
//$post = Request::getContent();
//return response()->json($request->all());

}


}
