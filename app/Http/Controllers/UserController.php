<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showID ($id=null) {
         if ($id == NULL){
             return "Empty ID";  

        } else {
             return $id;
         }
    }
    
    public function showForm () {
         return view ('form');
    }
    
    public function showThanks () {
           return view ('thank-you');
        }
}

