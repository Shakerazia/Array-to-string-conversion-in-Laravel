```<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('welcome');
   });
Route::get('/home', 'HomeController@index')->name('home');

Route::post('department.store', [
    'uses' => 'DepartmentController@store',
'as' => 'department.store'
]);

Route::get('department.departments', [
    'uses' => 'DepartmentController@index',
'as' => 'department.departments'
]);

Route::delete('department.delete/{id}', [
        'uses' => 'DepartmentController@destroy',
    	'as' => 'department.delete'
]);

Route::get('department.departments/{id}', [
        'uses' => 'DepartmentController@edit',
    'as' => 'department.edit'
    
]);

Route::post('department.update/{id}', [
        'uses' => 'DepartmentController@update',
    'as' => 'department.update'
    
]);

Route::post('designation.store', [
    'uses' => 'DesignationController@store',
'as' => 'designation.store'
]);

Route::get('designation.designations', [
    'uses' => 'DesignationController@index',
'as' => 'designation.designations'
]);


Route::delete('designation.delete/{id}', [
        'uses' => 'DesignationController@destroy',
        'as' => 'designation.delete'
]);

Route::get('designation.designations/{id}', [
        'uses' => 'DesignationController@edit',
    'as' => 'designation.edit'
    
]);

Route::post('designation.update/{id}', [
        'uses' => 'DesignationController@update',
    'as' => 'designation.update'
    
]);


Route::get('employee.employees', [
    'uses' => 'EmployeeController@index',
'as' => 'employee.employees'
]);

Route::post('employee.store', [
    'uses' => 'EmployeeController@store',
'as' => 'employee.store'
]);


Route::get('employee/profile/{id}', [
        'uses' => 'EmployeeController@show',
    'as' => 'employee/profile'
    
]);

Route::get('employee/profile/{id}', ['uses' => 'EmployeeController@show', 'as' => 'employee/profile']);


Route::delete('employee.delete/{id}', [
        'uses' => 'EmployeeController@destroy',
        'as' => 'employee.delete'
]);

Route::get('employee.employees/{id}', [
        'uses' => 'EmployeeController@edit',
    'as' => 'employee.edit'
    
]);

Route::post('store', [
        'uses' => 'SalaryController@store',
    'as' => 'store'
    
]);


Route::get('/salary','SalaryController@permanentfunct');


Route::get('/findProductName','SalaryController@findstep');


Route::get('/findPrice','SalaryController@findsalary');


Route::get('/findContractName','SalaryController@findcontract');



Route::get('/findcontract','SalaryController@findcontractsalary');


Route::get('/findDepartmentName','SalaryController@finddepartment');

 });
```
