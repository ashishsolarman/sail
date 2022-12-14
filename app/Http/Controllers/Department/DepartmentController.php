<?php

namespace App\Http\Controllers\Department;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department_level;
use App\Models\Department_type;
use App\Models\DesigDesc;
use App\Models\Organisation;
use App\Models\Tbl_master_reports_department;
use App\Models\Tbl_department;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Crypt;

class DepartmentController extends Controller
{
    public function depart_level_show()
    {
        $data = Department_level::orderBy('id', 'DESC')->paginate(5);
        return view('department.depart_level',['data'=>$data]);
    }

    public function add_level_form()
    {
        return view('department.add_depart_level_form');
    }

    public function add_level_form_save(Request $request)
    {
     	$request->validate([
      		'level_name'=>'required|max:255',
      		'rank'=>'required|max:11'
      	]);

     	$depart_data= new Department_level;
     	$depart_data->level_name = $request->level_name;
     	$depart_data->rank = $request->rank;
     	$depart_data->save();

     	return redirect()->back()->withsuccess('Your Data has been successfully Uptated');

    }
    public function edit_depart_level($id)
    {
	    $id = Crypt::decrypt($id);
	   	$data = Department_level::find($id);

    	return view('department.edit_depart_level',['level'=>$data]);
	}

	public function update_depat_level(Request $request,$id)
	{
        $data = Department_level::find($id);
        $data->level_name = $request->level_name;
        $data->rank = $request->rank;
        $data->update();

        return redirect()->back()->withsuccess('Your Data has been successfully Uptated');
    }

	public function delete_level($id)
  {
    	$data = Department_level::find($id);
    	$data->destroy($id);

    	return redirect()->back()->withsuccess('Your Data has been successfully Deleted');
	}

	public function depart_type_show()
  {
      $data = Department_type::orderBy('id', 'DESC')->paginate(5);
      return view('department.depart_type',['data'=>$data]);
  }

  public function add_type_form()
  {
      return view('department.add_depart_type_form');
  }

  public function add_type_form_save(Request $request)
  {
   	$request->validate([
    		'type_code'=>'required|max:20',
    		'description'=>'required|max:255'
    	]);

   	$depart_data= new Department_type;
   	$depart_data->type_code = $request->type_code;
   	$depart_data->description = $request->description;
   	$depart_data->save();

   	return redirect()->back()->withsuccess('Your Data has been successfully Uptated');

  }
  public function edit_depart_type($id)
  {
    $id = Crypt::decrypt($id);
   	$data = Department_type::find($id);

  	return view('department.edit_depart_type',['type'=>$data]);
	}

	public function update_depat_type(Request $request,$id)
	{
    $data = Department_type::find($id);
    $data->type_code = $request->type_code;
    $data->description = $request->description;
    $data->update();

    return redirect()->back()->withsuccess('Your Data has been successfully Uptated');
  }

	public function delete__depart_type($id)
  {
  	$data = Department_type::find($id);
  	$data->destroy($id);

  	return redirect()->back()->withsuccess('Your Data has been successfully Deleted');
	}

  public function department_show()
  {
      $data = Tbl_department::select('tbl_departments.*', 'department_levels.level_name', 'department_types.type_code', 'tbl_master_reports_departments.rep_depart_name')
      ->join('department_levels','department_levels.id','=','tbl_departments.department_level')
      ->join('department_types','department_types.id','=','tbl_departments.department_type')
      ->join('tbl_master_reports_departments','tbl_master_reports_departments.rep_depart_code','=','tbl_departments.report_depart')
      ->orderBy('tbl_departments.id', 'DESC')->paginate(10);
      // dd($data);
      return view('department.department',['data'=>$data]);
  }

  public function add_depart_form()
  {
    $org = Organisation::get();
    $depart_type = Department_type::get();
    $depart_level = Department_level::get();
    $report_depart = Tbl_master_reports_department::get();
    // dd($depart_type);
    return view('department.add_department',['depart_type'=>$depart_type],['org'=>$org])->with('depart_level', $depart_level)->with('report_depart', $report_depart);
  }

  public function add_depart_save(Request $request)
  {
    $request->validate([
      'org'=>'required|max:255',
      'departmentId'=>'required|max:255',
      'short_name'=>'required|max:255',
      'seq_no'=>'required|max:20',
      'description'=>'required|max:500',
      'depart_type'=>'required|max:255',
      'depart_level'=>'required|max:255', 
      'depart_report'=>'required|max:255', 
      'from_date'=>'required', 
      'to_date'=>'required', 
      'functional'=>'required|max:25', 
    ]);

    $department_data= new tbl_department;
    $department_data->organisation = $request->org;
    $department_data->department_id = $request->departmentId;
    $department_data->short_name = $request->short_name;
    $department_data->seqno = $request->seq_no;
    $department_data->description = $request->description;
    $department_data->department_type = $request->depart_type;
    $department_data->department_level = $request->depart_level;
    $department_data->report_depart = $request->depart_report;
    $department_data->from_date = $request->from_date;
    $department_data->to_date = $request->to_date;
    $department_data->functional = $request->functional;
    $department_data->save();

    return redirect()->back()->withsuccess('Your Data has been successfully Uptated');

  }

  public function edit_department($id)
  {
    $id = Crypt::decrypt($id);
    $data = Tbl_department::find($id);
    $ord_id = $data['organisation'];
    $dept_type = $data['department_type'];
    $dept_level = $data['department_level'];
    $rep_dept = $data['report_depart'];
    // dd($dept_level);
    $organisation = Organisation::where('id', '=', $ord_id)->first();
    $org = Organisation::get();
    $department_type = Department_type::where('id', '=', $dept_type)->first();
    $deptmnt_type = Department_type::get();
    $department_level = Department_level::where('id', '=', $dept_level)->first();
    $deptmnt_level = Department_level::get();
    // dd($department_level);
    $rep_departtment = Tbl_master_reports_department::where('id', '=', $rep_dept)->first();
    $rep_deptmnt = Tbl_master_reports_department::get();
    // dd($organisation);
    return view('department.edit_department',['data'=>$data],['organisation'=>$organisation])->with('department_type', $department_type)->with('department_level', $department_level)->with('rep_departtment', $rep_departtment)->with('org', $org)->with('deptmnt_type', $deptmnt_type)->with('deptmnt_level', $deptmnt_level)->with('rep_deptmnt', $rep_deptmnt);
  }

  public function update_department(Request $request,$id)
  {
    $data = Tbl_department::find($id);
    $data->organisation = $request->org;
    $data->department_id = $request->dept_id;
    $data->short_name = $request->short_name;
    $data->seqno = $request->seq_no;
    $data->description = $request->description;
    $data->department_type = $request->dept_type;
    $data->department_level = $request->dept_level;
    $data->report_depart = $request->rep_dept;
    $data->from_date = $request->from_date;
    $data->to_date = $request->to_date;
    $data->functional = $request->functional;
    $data->save();

    return redirect()->back()->withsuccess('Your Data has been successfully Uptated');
  }

  public function delete_department($id)
  {
    $data = Department_type::find($id);
    $data->destroy($id);

    return redirect()->back()->withsuccess('Your Data has been successfully Deleted');
  }
}
