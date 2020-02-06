<?php

namespace App\Http\Controllers;

use App\companies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*paginación basica laravel*/
        /*$companies = companies::paginate(10);*/
        $companies = companies::all();
        return view('company.list', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.create');
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
            'name'=> 'required',
            'email'=> 'required|unique:companies|email',
            'logo'=> 'required|mimes:png|dimensions:min_width=150,min_height=150'
        ]);
        /*muevo el archivo al storage y registro el nombre*/
        $file =  Input::file('logo')->getClientOriginalName();
        $ext = pathinfo($file, PATHINFO_EXTENSION);
        $logo = 'logo_'.uniqid().'_compania.'.$ext;
        \Storage::disk('public')->put($logo,  \File::get($request->file('logo')));

        $company = new companies();
        $company->name = $request->name;
        $company->email = $request->email;
        $company->logo = $logo;
        $company->save();

        return redirect()->route('compania')->with('flash', 'Creado correctamente');

    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\companies  $companies
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = companies::find($id);
        return view('company.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\companies  $companies
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name'=> 'required',
            'email'=> 'required|email',
            'logo'=> 'mimes:png|dimensions:min_width=150,min_height=150'
        ]);

        $company = companies::find($id);        
        $company->name = $request->name;
        $company->email = $request->email;
        /*valido si el input file llega vacio */
        if($request->hasFile('logo')){
            /*elimino el archivo anterior*/
            \Storage::disk('public')->delete($company->logo);
            /*cambio nombre de archivo y lo muevo al storage public*/
            $file =  Input::file('logo')->getClientOriginalName();
            $ext = pathinfo($file, PATHINFO_EXTENSION);
            $logo = 'logo_'.uniqid().'_compania.'.$ext;
            \Storage::disk('public')->put($logo,  \File::get($request->file('logo')));
            $company->logo = $logo;
        }
        $company->update();
        return redirect()->route('compania')->with('flash', 'Actualizado correctamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\companies  $companies
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $compani = companies::find($id)->delete();
        return redirect()->route('compania')->with('flash', 'Eliminado correctamente');
    }
}
