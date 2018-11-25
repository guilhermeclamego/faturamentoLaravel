<?php

namespace faturamento\Http\Controllers\Auth;

use Illuminate\Http\Request;
use faturamento\Http\Controllers\Controller;
use Auth;
use Session;

class LogoutController extends Controller
{

    public function Logout(){
        //echo "auth:" . Auth::user();
        Auth::logout();
        Session::flush();
        return redirect("/login");
    }
}