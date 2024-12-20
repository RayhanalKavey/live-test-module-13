<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
Route::get('/', function () {
    return view('welcome');
});

/* 
// Check if the email exists in the request

if(){

     // Return a successful JSON response

     return ......;

}else{

     // Return a failed JSON response

     return ......;

}
*/
Route::post('/form-submit', function(Request $request, ){
    $email = $request->email;
    if($email){
        
        return response()->json([
            "status"=> "success",
            "message"=> "Form submitted successfully.",
            'email'=>$email
        ]);
    }else{
        return response()->json([
            "status"=> "failed",
            "message"=> "Form submission failed.",
        ]);

    }
});

Route::get('/user-agent', function (Request $request) {
    $userAgent = $request->header('User-Agent');

    return response($userAgent);
});