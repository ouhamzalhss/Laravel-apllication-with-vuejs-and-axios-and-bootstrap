<?php

namespace WebPro\Http\Controllers;

use Illuminate\Http\Request;
use WebPro\Contact;
use Auth;


class ContactController extends Controller
{
     //middleware auth
    public function __construct(){
        $this->middleware('auth');
    }
    
     public function create(){
    return view('contact');   
    }
    //
    public function store(Request $request){
      
        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->phone = $request->input('phone');
        $contact->email = $request->input('email');
        $contact->message = $request->input('message');
        
        $contact->save();
        
         return Response()->json(['etat' => true]);
    }
}
