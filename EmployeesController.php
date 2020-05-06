```<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Employee;
use App\Department;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       /**
        $employee  =  Employee::all();
        
        $searchid=\Request::get('id_card');
        $search=\Request::get('name');

    if (isset($search)) {
        
        $searchemp=DB::table('employees')
        
        ->where('id_card', 'like', '%'.$searchid.'%')
        ->orwhere('name', 'like', '%'.$search.'%')
         ->get();
    }else{

        $searchemp=null;

       
    }
        return view('employee.employees', compact('employee', 'searchemp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
      
        $addmore = $request->addmore;
        $more = $request->more;

        for($i = 0; $i < count($addmore); $i++) {

        $employee = new Employee;

        $image = $request->file('image');

        $new_name = rand() . '.' . $request->image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        
        $employee->image = $new_name;
        $employee->name = $request->get('name');
        $employee->lname = $request->get('lname');
        $employee->fname = $request->get('fname');
        $employee->id_card = $request->get('id_card');
        $employee->birth_date = $request->get('birth_date');
        $employee->gender = $request->get('gender'); 
        $employee->address = $request->get('address');
        $employee->province = $request->get('province');  
        $employee->email = $request->get('email');
        $employee->phone = $request->get('phone');
        $employee->university = $addmore[$i];
        $employee->subject = $addmore[$i];
        $employee->degree = $addmore[$i];
        $employee->uni_province = $addmore[$i]; 
        $employee->start_date = $addmore[$i];
        $employee->end_date = $addmore[$i];
        $employee->company_name = $more[$i];
        $employee->position = $more[$i];
        $employee->period_from = $more[$i];
        $employee->period_to = $more[$i]; 

        $employee->save();
}
        return redirect('employee.employees')->with('success', 'Data has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   /** public function show($id)
    {
        $employee = Employee::find($id);

        return view('employee/profile', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $employee = Employee::find($id);
        
        return view('employee.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
   /**
    public function update(Request $request, $id)
    {
        $employee = Employee::find($id);
        $image = $request->file('image');

        $new_name = rand() . '.' . $request->image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        
        $employee->image = $new_name;
        $employee->name = $request->get('name');
        $employee->lname = $request->get('lname');
        $employee->fname = $request->get('fname');
        $employee->id_card = $request->get('id_card');
        $employee->birth_date = $request->get('birth_date');
        $employee->gender = $request->get('gender'); 
        $employee->address = $request->get('address');
        $employee->province = $request->get('province');  
        $employee->email = $request->get('email');
        $employee->phone = $request->get('phone');
        $employee->university = $request->get('university');
        $employee->subject = $request->get('subject');
        $employee->degree = $request->get('degree');
        $employee->uni_province = $request->get('uni_province'); 
        $employee->start_date = $request->get('start_date');
        $employee->end_date = $request->get('end_date');
        $employee->company_name = $request->get('company_name');
        $employee->position = $request->get('position');
        $employee->period_from = $request->get('period_from');
        $employee->period_to = $request->get('period_to'); 
        
        $employee->save();
        return back();
        */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::find($id);
        $employee->delete($id);

        return redirect('employee.employees')->with('success','Data has been  deleted');
    }
}
```
