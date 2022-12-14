<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DesigDesc;
use App\Models\GroupName;
use App\Models\Area;
use App\Models\User;
use App\Models\Status;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Crypt;
use Auth;


class UserController extends Controller
{
   public function users()
   {
      $data = User::orderBy('id', 'DESC')->paginate(5);
      
      return view('user.users',['users'=>$data]);
   }
  
 public function register(){
    $desig = DesigDesc::all();
    $group = GroupName::all();
    $area = Area::all();
     return view('user.register')->with('tbl_mst_design_desc',$desig)->with('tbl_mst_group_name',$group)->with('tbl_mst_area',$area);
   }

    public function profile(){
        return view('profile.profile');
    }

    public function store(Request $request){
         // dd($request->all());
         $request->validate([
      'pl_no'=>'required|max:255',
      'unit_pl_no'=>'required|max:255',
      // 'emp_title'=>'required|max:20',
      // 'email'=>'required|email|unique:users|max:255',
      // 'name'=>'required|max:255',
      // 'gender'=>'required|max:255',
      // 'password'=>'required|max:6',
      // 'emp_dob'=>'required|max:255',
      // 'exe_nexe'=>'required|max:255',
      // 'company_name'=>'required|max:255',
      // 'designation'=>'required|max:255',
      // 'emp_grade'=>'required|max:255',
      // 'org'=>'required|max:255',
      // 'doj_unit'=>'required|max:255',
      // 'group_name'=>'required|max:255',
      // 'designation'=>'required|max:255',
      // 'area'=>'required|max:255',
      // 'mobile'=>'required',
      // 'designation'=>'required|max:255',
      // 'password'=>'required',
      // 'emp_image'=>'required|mimes:jpeg,png,jpg,gif,svg|max:3048',
        
     ]);
              if($request->file('emp_image')){
            $file= $request->file('emp_image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('emp_images'), $filename);
            $photo['emp_image']= $filename;
        }
        $save = User::insert([
                'pl_no' => $request->pl_no,
                'unit_pl_no' => $request->unit_pl_no,
                'emp_title' => $request->emp_title,
                'name' => $request->name,
                'gender' => $request->gender,
                'emp_dob' => $request->emp_dob,
                'exe_nexe' => $request->exe_nexe,
                'designation' => $request->designation,
                'emp_grade' => $request->emp_grade,
                'org'=>$request->org,
                'doj_unit'=>$request->doj_unit,
                'group_name'=>$request->group_name,
                'area'=>$request->area,
                'mobile'=>$request->mobile,
                'email'=>$request->email,
                'emp_image'=>implode('|', $photo),
                'password' => Hash::make($request->password),
               
        ]);

     
        return redirect()->back()->withSuccess('User has been successfullt registered');
    }

public function delete_user($id){
    $data = User::find($id);
     $destination = 'uploads/students/'.$data->emp_image;
    if(File::exists($destination)){
     File::delete($destination);
}
    $data->destroy($id);
    return redirect()->back()->withsuccess('Your Data has been successfully Deleted');
}

public function edit_user($id){
     $id = Crypt::decrypt($id);
   $data = User::find($id);
    $desig = DesigDesc::all();
    $group = GroupName::all();
    $area = Area::all();
   return view('user.edit_user',['users'=>$data])->with('tbl_mst_design_desc',$desig)->with('tbl_mst_group_name',$group)->with('tbl_mst_area',$area);
}


public function update_user(Request $request,$id){
               $data = User::find($id);
            
                $data->pl_no = $request->pl_no;
                $data->unit_pl_no = $request->unit_pl_no;
                $data->emp_title = $request->emp_title;
                $data->name = $request->name;
                $data->gender = $request->gender;
                $data->emp_dob = $request->emp_dob;
                $data->exe_nexe = $request->exe_nexe;
                $data->designation = $request->designation;
                $data->emp_grade = $request->emp_grade;
                $data->org=$request->org;
                $data->doj_unit=$request->doj_unit;
                $data->group_name=$request->group_name;
                $data->area=$request->area;
                $data->mobile=$request->mobile;
                $data->email=$request->email;
                if($request->file('emp_image')){
               $file= $request->file('emp_image');
               $filename= date('YmdHi').$file->getClientOriginalName();
               $file-> move(public_path('emp_images'), $filename);
               $data['emp_image']= $filename;
             }
                $data->password = Hash::make($request->password);
                $data->update();
                return redirect()->back()->withsuccess('Your Data has been successfully Uptated');
                 }

    public function view_user($id){
        $id = Crypt::decrypt($id);
   $data = User::find($id);
   return view('user.view_user',['users'=>$data]);
    } 

    // public function total_users(){
    //     $countUsers = User::count();
    //     return view('home',['users'=>$countUsers]);
    // }     
 }                

       
