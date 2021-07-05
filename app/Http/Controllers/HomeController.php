<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
use Mail;

use Carbon\Carbon;

session_start();

class HomeController extends Controller
{
    /* Phượng */
    public function index() {
        return view('pages.home');
    }
    /* End Phượng */


    public function error_page(){
        return view('errors.404');
    }
}
