<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function view()
    {
        return view('login');
    }

    public function cek_login(Request $r)
    {
        $username = 'admin';
        $password = 'admin';

        if ($r->username == $username) {
            if ($r->password == $password) {
                return view('/data');
            } else {
                echo "password salah";
            }
        } else {
            echo "USer salah";
        }
    }
}
