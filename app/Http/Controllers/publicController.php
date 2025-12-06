<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class publicController extends Controller
{
    public $users = [
        [
            'name' => 'Mario',
            'surname' => 'Rossi',
            'role' => 'Founder & CEO'
        ],
        [
            'name' => 'Luigi',
            'surname' => 'Verdi',
            'role' => 'CTO'
        ],
        [
            'name' => 'Giulia',
            'surname' => 'Neri',
            'role' => 'CIO'
        ],
    ];
    public function homepage()
    {
        return view('welcome');
    }
    public function aboutUs()
    {
        return view('about-us', ['users' => $this->users]);
    }
    public function aboutUsDetail($name)
    {

        foreach ($this->users as $user) {
            if ($name == $user['name']) {
                return view('about-us-detail', ['user' => $user]);
            }
        }
    }
    public function contacts() {
      return view('contacts');    
    }
    public function contactUs(Request $request){
       $user = $request->input('user');
       $user = $request->input('email'); 
       $user = $request->input('message';) 
       $userData = compact('user', 'email', message);

       try{
          Mail::to($email)->send(new contactMail($userData));
        }catch(Exception $e){
            return redirect()->route('homepage')->with('emailError', "c'è stato un problema con l'invio della mail.
            per favore riprova più tard");
        }
        return redirect(route('homepage'))->with('emailSent', 'Hai corerattamente inviato una email');
 }
}
