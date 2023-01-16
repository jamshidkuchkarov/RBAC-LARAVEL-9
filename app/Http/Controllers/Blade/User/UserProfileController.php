<?php

namespace App\Http\Controllers\Blade\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function index(){
        return view('pages.profile.index');
    }
}
