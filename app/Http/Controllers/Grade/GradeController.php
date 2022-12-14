<?php

namespace App\Http\Controllers\Grade;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Grade;
use Illuminate\Support\Facades\Crypt;

class GradeController extends Controller
{
      public function show_grade(){
            $data = Grade::orderBy('id', 'DESC')->paginate(5);
            return view('grade.grades',['tbl_grade'=>$data]);
           }  
       public function add_grade(){
        return view('grade.add_grade');
       } 

       public function store_grade(Request $request){
             $request->validate([
            'grade_code'=>'required|max:255',
            'grade'=>'required|max:1000',
           
        
        ]);
                $data = new Grade;
                $data->grade_code = $request->grade_code;
                $data->grade = $request->grade;
              
                $data->save();
                 return redirect('show_grade')->withsuccess('Your Data has been successfully Uploaded');
                 }   

                 public function edit_grade($id){
          $id = Crypt::decrypt($id);
         $data = Grade::find($id);
         
        return view('grade.edit_grade',['tbl_grade'=>$data]);
}  

   public function update_grade(Request $request,$id){
     $request->validate([
            'grade_code'=>'required|max:255',
            'grade'=>'required|max:1000',
           
        
        ]);
                $data = Grade::find($id);
                $data->grade_code = $request->grade_code;
                $data->grade = $request->grade;
              
               
                $data->update();
                return redirect()->back()->withsuccess('Your Data has been successfully Updated');
   }
   public function destroy_grade($id){
      $data = Grade::find($id);
      $data->destroy($id);
      return redirect()->back()->withsuccess('Your Data has been successfully Deleted');
   }         
}
