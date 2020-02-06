<?php

namespace App\Http\Controllers;

use App\employees;
use Illuminate\Http\Request; 
use App\companies;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = employees::paginate(10);
        return view('employee.list', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = companies::all();
        return view('employee.create', compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $validatedData = $request->validate([
            'name'=> 'required|regex:/^[\pL\s\-]+$/u',
            'last_name' => 'required|regex:/^[\pL\s\-]+$/u',
            'email'=> 'required|unique:employees|email',
            'phone'=> 'required|numeric|digits_between:7,10',
            'company'=> 'required|numeric'
        ]);

        $employee = new employees();
        $employee->name = $request->name;
        $employee->last_name = $request->last_name;
        $employee->phone = $request->phone;
        $employee->email = $request->email;        
        $employee->id_companies = $request->company;        
        $employee->save();

        return redirect()->route('empleado')->with('flash', 'Creado correctamente');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = employees::find($id);
        $companies = companies::all();
        return view('employee.edit', compact('employee', 'companies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name'=> 'required|regex:/^[\pL\s\-]+$/u',
            'last_name' => 'required|regex:/^[\pL\s\-]+$/u',
            'email'=> 'required|unique:employees|email',
            'phone'=> 'required|numeric|digits_between:7,10',
            'company'=> 'required|numeric'
        ]);

        $employee = employees::find($id);
        $employee->name = $request->name;
        $employee->last_name = $request->last_name;
        $employee->phone = $request->phone;
        $employee->email = $request->email;        
        $employee->id_companies = $request->company;        
        $employee->update();

        return redirect()->route('empleado')->with('flash', 'Actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $employee = employees::find($id)->delete();
        return redirect()->route('empleado')->with('flash', 'Eliminado correctamente');
    }
}
