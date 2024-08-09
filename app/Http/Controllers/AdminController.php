<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function contact(){
        $contact=Contact::all();
        return view('admin.contact',compact('contact'));
    } 
    public function delete_contact(Contact $contact){
        $contact->delete();
        return redirect()->route('admin.contact');
    } 
    public function loginForm(){
        
        return view('admin.login');
    } 
}
