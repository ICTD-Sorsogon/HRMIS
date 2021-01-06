<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function getUser(){
        $user = Auth::user()->name;
        return view('dashboard', [
            'currentUser' => json_encode($user)
        ]);
    }

}
