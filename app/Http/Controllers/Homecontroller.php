<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Systemuser;

class Homecontroller extends Controller
{
    public function home(){
        return view('pages.home');
    }

    public function homepage(){ //homepage
        return view('pages.homepage');
    }

    public function aboutus(){  //aboutus page
        return view('pages.aboutus');
    }

    public function workbased(){   //workbased page
        return view('pages.workbased');
    }

    public function ourwork(){   //workbased page
        return view('pages.ourwork');
    }

    public function contact(){   //workbased page
        return view('pages.contact');
    }





    
    public function createSubmit(Request $request){
    
        $this->validate(
            $request,
            [
                'name'=>'required|min:5|max:20|',
                'email'=>'required',
                'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
                'subject'=>'required',
                'message'=>'required',
    
            ],
            [
                'name.required'=>'Please put your name',
                'name.min'=>'Name must be greater than 2 charcters',
                'email.required'=>'Please enter proper email',
                'phone.required'=>'Please enter proper phone number',
                'message.required'=>'Please enter proper message',
               
            ]
        );
        
        $var = new Systemuser();
        $var->name = $request->name;
        $var->email = $request->email;
        $var->phone = $request->phone;
        $var->subject = $request->subject;
        $var->message = $request->message;
        $var->save();
        return "<h1>Thank you for your response</h1>";
    
    }

    public function createSubmitBar(Request $request){
    
        $this->validate(
            $request,
            [
                'name'=>'required|min:5|max:20|regex:/^[A-Za-z]+$/',
                'email'=>'required',
                'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
                'subject'=>'required',
                'message'=>'required',
    
            ],
            [
                'name.required'=>'Please put your name',
                'name.min'=>'Name must be greater than 2 charcters',
               
            ]
        );
        
        $var = new Systemuser();
        $var->name = $request->name;
        $var->email = $request->email;
        $var->phone = $request->phone;
        $var->subject = $request->subject;
        $var->message = $request->message;
        $var->save();
        return "<h1>Thank you for your response</h1>";
    
    }


    public function usermessage(){


        $systemusers = Systemuser::all();
        return view('pages.admins.messagelist')->with('systemusers',$systemusers);
    }



    public function adminDash(){
        return view('pages.admins.admindash');

    }
}
