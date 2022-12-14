<?php

namespace App\Http\Controllers\Designation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DesigDesc;
use Illuminate\Support\Facades\Crypt;
class DesignationController extends Controller
{
     public function show_desig(){
            $data = DesigDesc::orderBy('id', 'DESC')->paginate(5);
            return view('designation.designation',['designation'=>$data]);
           }  
       public function add_designation(){
        return view('designation.add_designation');
       } 

       public function store_designation(Request $request){
                    $request->validate([
            'desig_code'=>'required|max:1000|numeric',
            'desig_desc'=>'required|max:255',
           
        
        ]);
                $data = new DesigDesc;
                $data->desig_code = $request->desig_code;
                $data->desig_desc = $request->desig_desc;
              
                $data->save();
                 return redirect('show_designation')->withsuccess('Your Data has been successfully Uploaded');
                 }   

                 public function edit_designation($id){
          $id = Crypt::decrypt($id);
         $data = DesigDesc::find($id);
         
        return view('designation.edit_designation',['designation'=>$data]);
}  

   public function update_designation(Request $request,$id){
     $request->validate([
            'desig_code'=>'required|max:1000|numeric',
            'desig_desc'=>'required|max:255',
           
        
        ]);
                $data = DesigDesc::find($id);
               $data->desig_code = $request->desig_code;
                $data->desig_desc = $request->desig_desc;
              
               
                $data->update();
                return redirect()->back()->withsuccess('Your Data has been successfully Updated');
   }
   public function destroy_designation($id){
      $data = DesigDesc::find($id);
      $data->destroy($id);
      return redirect()->back()->withsuccess('Your Data has been successfully Deleted');
   }         
}
