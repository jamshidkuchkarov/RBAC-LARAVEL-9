<?php

namespace App\Http\Controllers\Blade\Permisson;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissonController extends Controller
{
    public function index(){
        $permissions = Permission::with('roles')->paginate(10);
        return view('pages.permissons.index',compact('permissions'));
    }
    public function add($){
        return view('pages.permissions.add');
    }
}
