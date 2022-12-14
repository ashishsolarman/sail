<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\Register;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;



class RegisterController extends Controller
{

     public function show_user_data(){
        $users_data = Register::all();
    return view('/auth.users_data',['users'=>$users_data]);
   }
   public function show_add_user(){
    return view('/auth.register');
   }
   public function store_admin_user(Request $request){


         $add_user = new Register;
         $add_user->role = $request->role;
         $add_user->name = $request->name;
         $add_user->email = $request->email;
         $add_user->password = Hash::make($request->password);
         $add_user->save();
         return view('/auth.register')->withSuccess('Great! New User has been successfully uploaded.');
   }


   public function edit_register($id){
            $users = Register::find($id)->first();
           return view('auth.edit_register');
   }

   public function update_users(Request $request, $id){
         $add_user =Register::find($id);
         $add_user->role = $request->role;
         $add_user->name = $request->name;
         $add_user->email = $request->email;
         $add_user->password = Hash::make($request->password);
         $add_user->save();
        return view('auth.edit_register');
   }

   public function delete_users($id){
     $user = Register::find($id);
      $user->delete();
      return back();
   }

   public function reset(){
    return view('auth.passwords.reset');
   }
}
