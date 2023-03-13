<?php

namespace App\Http\Controllers\user;
use Illuminate\Routing\Controller;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function show_profile($profile_id)
    {
        $user=User::find($profile_id);

        $actualUser = Auth::user();
        if ($actualUser->id !== intval(request()->route('profile_id'))) {
            // Redirect to an error page or show a message
           
            return redirect()->route('home');
        }

        return view('profile',[
            'profile'=>$user,
        ]);
    }
}
