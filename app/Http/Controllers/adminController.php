<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\movies;
use App\Models\theater;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function addMovie (Request $req){
$mydata = new movies();
$mydata->name = $req->name;
$mydata->description = $req->description;

$mydata->date = $req->date;
$mydata->theater = $req->theater;
$mydata->time = $req->time;
if($req->hasFile('poster')){
    $file = $req->file('poster');
    $ext = $file->getClientOriginalExtension();
    $filename = rand().'.'.$ext;
    $file->move('Images',$filename);
   $mydata->poster = $filename;
}

$mydata->save();
return redirect()->back();
    }
    public function addTheater (Request $new){
        $mydata = new theater();
        $mydata->name = $new->name;

        if($new->hasFile('poster')){
            $file = $new->file('poster');
            $ext = $file->getClientOriginalExtension();
            $filename = rand().'.'.$ext;
            $file->move('Images',$filename);
           $mydata->poster = $filename;
        }
        
        $mydata->save();
        return redirect()->back();
            }
            public function gettheaternames(){
                $data = theater::all();
                return view('admin.add-movies',compact('data'));
            }
       
            public function fetchmovies(){
                $data = movies::all();
                return view('admin.movie',compact('data'));
            }
            public function fetchTheaters()    {
                $data = Theater::all(); 
                return view('admin.theater', compact('data'));
            }
            public function fetchUsers()    {
                $data =User::all(); 
                return view('admin.users', compact('data'));
            }
public function deleteUser($id){
$del = User::find($id);
$del->delete();
return redirect()->back();
}
public function deleteMovie($id){
    $del = movies::find($id);
    $del->delete();
    return redirect()->back();
    }
    public function deleteTheater($id){
        $del = theater::find($id);
        $del->delete();
        return redirect()->back();
        }
public function edit_movie($id){
    $mydata = movies::find($id);
return view ('admin.edit-movie',compact('mydata'));
}
        }
