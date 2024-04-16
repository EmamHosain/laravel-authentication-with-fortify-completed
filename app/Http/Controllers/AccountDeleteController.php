<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountDeleteController extends Controller
{
   
  
    function index(){
        return view('pages.confirm-password');
    }
    public function deleteAccount()
    {
           auth()->user()->delete();
           return redirect()->route('login');
       
    }
}
