<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Http;

class ShopController extends Controller
{
    public function index(){
        $response = Http::get('https://fakestoreapi.com/products');
    
        $jsonData = $response->json();
          
        // dd($jsonData);
        return view('home',compact('jsonData'));
    }

    public function contacts(){
        return view('contacts');
    }

    public function sendEmail(Request $request){

        $request->validate([
            'name' => 'required|min:4|max:20',
            'email'=>'required|email',
            'phone' => 'required|regex:/^[0-9]+$/',
            'message'=>'required|min:10|max:200'
        ]);

        $data=[
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'message'=>$request->message

        ];
        Mail::to($request->email)->send(new SendMail($data));
        return redirect()->route('index')->with('success','Email inviata!');
        
    }

}
