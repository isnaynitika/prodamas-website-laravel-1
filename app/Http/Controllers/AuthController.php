<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\user;
use Illuminate\Suppor\Str;

class AuthController extends Controller
{
    public function logout(){
        Auth::logout();
        return redirect('beranda');
    }
}
