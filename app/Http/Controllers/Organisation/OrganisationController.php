<?php

namespace App\Http\Controllers\Organisation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Organisation;
use Illuminate\Support\Facades\Crypt;

class OrganisationController extends Controller
{
    public function org(){
        return view('Organisation.add_organisation');
    }

    public function store_org(Request $request){
             $request->validate([
            'short_name'=>'required|max:255',
            'description'=>'required|max:1000',
             'city'=>'required|max:255',
             'state'=>'required|max:255',
             'country'=>'required|max:255',
        
        ]);
                $data = new Organisation;
                $data->short_name = $request->short_name;
                $data->description = $request->description;
                $data->city = $request->city;
                $data->state = $request->state;
                $data->country = $request->country;
                $data->save();
                 return redirect('show_organisation')->withsuccess('Your Data has been successfully Uploaded');
                 }
           public function show_org(){
            $data = Organisation::orderBy('id', 'DESC')->paginate(5);
            return view('organisation.view_organisation',['tbl_organisation'=>$data]);
           }   

         public function edit_organisation($id){
          $id = Crypt::decrypt($id);
         $data = Organisation::find($id);
         
        return view('organisation.edit_organisation',['tbl_organisation'=>$data]);
}  

   public function update_org(Request $request,$id){
     $request->validate([
            'short_name'=>'required|max:255',
            'description'=>'required|max:1000',
             'city'=>'required|max:255',
             'state'=>'required|max:255',
             'country'=>'required|max:255',
        
        ]);
                $data = Organisation::find($id);
                $data->short_name = $request->short_name;
                $data->description = $request->description;
                $data->city = $request->city;
                $data->state = $request->state;
                $data->country = $request->country;
                $data->update();
                return redirect()->back()->withsuccess('Your Data has been successfully Updated');
   }
   public function destroy_org($id){
      $data = Organisation::find($id);
      $data->destroy($id);
      return redirect()->back()->withsuccess('Your Data has been successfully Deleted');
   }

}

