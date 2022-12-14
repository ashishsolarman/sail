<?php
use Illuminate\Support\Facades\Route;

 use App\Http\Controllers\Auth\Request;

     use App\Http\Controllers\UserController;
     
      use App\Http\Controllers\Auth\LoginController;

      //arun

Route::get('/', function () {
    return view('auth.login');
});


Route::get('project', function () {
    return view('user.project');
});


// Route::get('details', function () {
//     return view('user.details');
// });
Session::flash('message','User Just Logout');
Session::flash('alert','alert-danger');

Auth::routes();
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::get('/admin_home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin_home');




Route::get('/users',[App\Http\Controllers\UserController::class,'users'])->name('users');
Route::get('/register',[App\Http\Controllers\UserController::class,'register'])->name('register');
Route::get('/delete_user/{id}',[App\Http\Controllers\UserController::class,'delete_user'])->name('delete_user');

Route::post('/register',[App\Http\Controllers\UserController::class,'store'])->name('store');
Route::get('/edit_user/{editID}',[App\Http\Controllers\UserController::class,'edit_user'])->name('edit_user');
Route::put('/edit_user/{id}',[App\Http\Controllers\UserController::class,'update_user'])->name('edit_user');

Route::get('/view_user/{viewID}',[App\Http\Controllers\UserController::class,'view_user'])->name('view_user');

// organisation

Route::get('/add_organisation',[App\Http\Controllers\Organisation\OrganisationController::class,'org'])->name('add_organisation');
Route::post('/add_organisation',[App\Http\Controllers\Organisation\OrganisationController::class,'store_org'])->name('add_organisation');

Route::get('/show_organisation',[App\Http\Controllers\Organisation\OrganisationController::class,'show_org'])->name('show_organisation');

Route::get('/edit_organisation/{editID}',[App\Http\Controllers\Organisation\OrganisationController::class,'edit_organisation'])->name('edit_organisation');
Route::put('/edit_organisation/{id}',[App\Http\Controllers\Organisation\OrganisationController::class,'update_org'])->name('edit_organisation');
Route::get('/destroy_org/{id}',[App\Http\Controllers\Organisation\OrganisationController::class,'destroy_org'])->name('destroy_org');

// Grade
Route::get('/show_grade',[App\Http\Controllers\Grade\GradeController::class,'show_grade'])->name('show_grade');
Route::get('/add_grade',[App\Http\Controllers\Grade\GradeController::class,'add_grade'])->name('add_grade');
Route::post('/add_grade',[App\Http\Controllers\Grade\GradeController::class,'store_grade'])->name('add_grade');
Route::get('/edit_grade/{editID}',[App\Http\Controllers\Grade\GradeController::class,'edit_grade'])->name('edit_grade');
Route::put('/edit_grade/{id}',[App\Http\Controllers\Grade\GradeController::class,'update_grade'])->name('edit_grade');
Route::get('/destroy_grade/{id}',[App\Http\Controllers\Grade\GradeController::class,'destroy_grade'])->name('destroy_grade');
// Area
Route::get('/show_area',[App\Http\Controllers\Master\AreaController::class,'show_area'])->name('show_area');
Route::get('/add_area',[App\Http\Controllers\Master\AreaController::class,'add_area'])->name('add_area');
Route::post('/add_area',[App\Http\Controllers\Master\AreaController::class,'store_area'])->name('add_area');
Route::get('/edit_area/{editID}',[App\Http\Controllers\Master\AreaController::class,'edit_area'])->name('edit_area');
Route::put('/edit_area/{id}',[App\Http\Controllers\Master\AreaController::class,'update_area'])->name('edit_area');
Route::get('/destroy_area/{id}',[App\Http\Controllers\Master\AreaController::class,'destroy_area'])->name('destroy_area');

//Department Level

Route::get('/department_level',[App\Http\Controllers\Department\DepartmentController::class,'depart_level_show'])->name('department_level');

Route::get('/add_depart_level_form',[App\Http\Controllers\Department\DepartmentController::class,'add_level_form'])->name('add_depart_level_form');
Route::post('/level_save',[App\Http\Controllers\Department\DepartmentController::class,'add_level_form_save'])->name('level_save');
Route::get('/edit_depat_level/{editID}',[App\Http\Controllers\Department\DepartmentController::class,'edit_depart_level'])->name('edit_depat_level');
Route::put('/edit_depat_level/{id}',[App\Http\Controllers\Department\DepartmentController::class,'update_depat_level'])->name('edit_depat_level');

Route::get('/delete_depat_level/{id}',[App\Http\Controllers\Department\DepartmentController::class,'delete_level'])->name('delete_depat_level');

//Department Type

Route::get('/department_type',[App\Http\Controllers\Department\DepartmentController::class,'depart_type_show'])->name('department_type');
Route::get('/add_depart_type_form',[App\Http\Controllers\Department\DepartmentController::class,'add_type_form'])->name('add_depart_type_form');
Route::post('/type_save',[App\Http\Controllers\Department\DepartmentController::class,'add_type_form_save'])->name('type_save');
Route::get('/edit_depart_type/{editID}',[App\Http\Controllers\Department\DepartmentController::class,'edit_depart_type'])->name('edit_depart_type');
Route::put('/edit_depat_type/{id}',[App\Http\Controllers\Department\DepartmentController::class,'update_depat_type'])->name('edit_depat_type');

Route::get('/delete_depart_type/{id}',[App\Http\Controllers\Department\DepartmentController::class,'delete_depart_type'])->name('delete_depart_type');

// Add Department

Route::get('/department',[App\Http\Controllers\Department\DepartmentController::class,'department_show'])->name('department');
Route::get('/add_depart_form',[App\Http\Controllers\Department\DepartmentController::class,'add_depart_form'])->name('add_depart_form');
Route::post('/depart_save',[App\Http\Controllers\Department\DepartmentController::class,'add_depart_save'])->name('depart_save');
Route::get('/edit_department/{editID}',[App\Http\Controllers\Department\DepartmentController::class,'edit_department'])->name('edit_department');
Route::put('/edit_department/{id}',[App\Http\Controllers\Department\DepartmentController::class,'update_department'])->name('edit_department');
Route::get('/delete_department/{id}',[App\Http\Controllers\Department\DepartmentController::class,'delete_department'])->name('delete_department');

// Designation
Route::get('/show_designation',[App\Http\Controllers\Designation\DesignationController::class,'show_desig'])->name('show_designation');
Route::get('/add_designation',[App\Http\Controllers\Designation\DesignationController::class,'add_designation'])->name('add_designation');
Route::post('/add_designation',[App\Http\Controllers\Designation\DesignationController::class,'store_designation'])->name('add_designation');
Route::get('/edit_designation/{editID}',[App\Http\Controllers\Designation\DesignationController::class,'edit_designation'])->name('edit_designation');
Route::put('/edit_designation/{id}',[App\Http\Controllers\Designation\DesignationController::class,'update_designation'])->name('edit_designation');
Route::get('/destroy_designation/{id}',[App\Http\Controllers\Designation\DesignationController::class,'destroy_designation'])->name('destroy_designation');