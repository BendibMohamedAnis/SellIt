<?php

namespace App\Http\Controllers;
use App\Controllers\Auth\ProfileController;
use Illuminate\Http\Request;
use App\Models\User;
use Redirect;
class ModifyProfileController extends Controller
{
    public function ModifyProfile(Request $request){
     
        $user=User::find($request->id);
        $user->name=$request->name;
        $user->username=$request->username;
        $user->email=$request->email;
        $user->save();

        
        return redirect('/profile/'.$request->id);
    }
}
