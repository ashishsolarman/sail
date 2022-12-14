<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Area;
use Illuminate\Support\Facades\Crypt;

class AreaController extends Controller
{
    public function show_area(){
            $data = Area::orderBy('id', 'DESC')->paginate(5);
            return view('area.areas',['tbl_mst_area'=>$data]);
           }  
       public function add_area(){
        return view('area.add_area');
       } 

       public function store_area(Request $request){
             $request->validate([
            'area_code'=>'required|max:255',
            'area_name'=>'required|max:1000',
           
        
        ]);
                $data = new Area;
                $data->area_code = $request->area_code;
                $data->area_name = $request->area_name;
              
                $data->save();
                 return redirect('show_area')->withsuccess('Your Data has been successfully Uploaded');
                 }   

                 public function edit_area($id){
          $id = Crypt::decrypt($id);
         $data = Area::find($id);
         
        return view('area.edit_area',['tbl_mst_area'=>$data]);
}  

   public function update_area(Request $request,$id){
     $request->validate([
            'area_code'=>'required|max:255',
            'area_name'=>'required|max:1000',
           
        
        ]);
                $data = Area::find($id);
              $data->area_code = $request->area_code;
                $data->area_name = $request->area_name;
              
               
                $data->update();
                return redirect()->back()->withsuccess('Your Data has been successfully Updated');
   }
   public function destroy_area($id){
      $data = Area::find($id);
      $data->destroy($id);
      return redirect()->back()->withsuccess('Your Data has been successfully Deleted');
   } 
}
