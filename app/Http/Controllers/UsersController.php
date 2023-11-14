<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function showUser($id){
        return view('pages.check-users',compact('id'));
    }
    public function showHome(){
        return "<h2>UserS HomePager</h2>";
    }
    
}
