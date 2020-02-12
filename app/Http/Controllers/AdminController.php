<?php
use App\User;
use Illuminate\Support\Facades\Auth;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public fonction log () {
    $user= Auth::User();
    return view('admin',['admin'=>$user->admin]);
    }
}
