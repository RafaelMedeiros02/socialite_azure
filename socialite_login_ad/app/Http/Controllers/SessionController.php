<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use function GuzzleHttp\Promise\all;

class SessionController extends Controller
{
    public function session() {

        Session::put('token', "dsdasdasdasdfghgfhgfhgfh");
        var_dump(Session::all());
         

    }
}
