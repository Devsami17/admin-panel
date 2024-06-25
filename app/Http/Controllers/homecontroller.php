<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\movies;
use App\Models\theater;
use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function dashboard() {
        $userCount = User::count();
        $movieCount = Movies::count(); 
        $theaterCount = Theater::count(); 
    
        return view('admin.dashboard', compact('userCount', 'movieCount', 'theaterCount'));
    }
    
    
}
