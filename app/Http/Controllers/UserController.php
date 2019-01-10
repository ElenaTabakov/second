<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showID ($id=null) {
         if (ctype_digit($id) && $id !== NULL){
             return $id;  

        } elseif  ($id == null) {
             return "Empty ID"; 
        } else {
             return "Wrong ID type";
         }
    }
    public function showForm () {
         return view ('form');
    }
}

