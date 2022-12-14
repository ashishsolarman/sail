<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;
use App\Models\DesigDesc;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $countUsers = User::count();
        $user = Auth::user();
        $user_id = $user->designation;
        // print_r($user_id);die;
        $designation = DesigDesc::where('desig_code','=',$user_id)->first();
        // dd($designation);
        return view('home')->with('user',$countUsers)->with('name',$user)->with('users',$designation);
    }

}
