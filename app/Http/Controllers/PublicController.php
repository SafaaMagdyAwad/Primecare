<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Subscribe;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    //
    public function login(){
        return view('login');
    }
    public function index(){
        return view('index');
    }
    public function about(){
        return view('about');
    }
    
    public function why(){
        return view('why');
    }
    
    public function team(){
        return view('team');
    }
    
    public function testimonial(){
        return view('testimonial');
    }
    
    public function contact(){
        return view('contact');
    }
    public function contact_post(Request $request){
        $data=$request->validate([
            'name'=>'required|string|max:50',
            'email'=>'required|email|string',
            'phone'=>'required|string',
            'message'=>'required|string',
        ]);
        // dd($data);
        Contact::create($data);
        return redirect()->route('index');
    }
    public function subscribe(Request $request){
        $data=$request->validate([
            'email'=>'required|email|string',
        ]);
        // dd($data);
        Subscribe::create($data);
        return redirect()->route('index');
    }
    public function search(Request $request){
        // $data=$request->validate([
        //     'search'=>'required|string',
        // ]);

        dd('user will search team by name or tasks');
        // return redirect()->route('index');
    }
}
