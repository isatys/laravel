<?php
namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function log () {
    $user= Auth::User();
    return view('admin',['admin'=>$user->admin]);
    }
}
