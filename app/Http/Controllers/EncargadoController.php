<?php

namespace App\Http\Controllers;

use App\Http\Requests\EncargadoRequest;
use Illuminate\Http\Request;
use App\Encargado;
use Laracasts\Flash\Flash;
use Datatables;

class EncargadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $encargados = Encargado::all();
        return view('admin.encargados.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.encargados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EncargadoRequest $request)
    {
        $encargado = new Encargado;
        $encargado->nombre = $request->nombre;
        $encargado->apellido = $request->apellido;
        $encargado->parentesco = $request->parentesco;
        $encargado->dpiencargado = $request->dpiencargado;
        $encargado->telefono = $request->telefono;
        $encargado->direccion = $request->direccion;
        $encargado->email = $request->email;
        $encargado->encargadoaux = $request->encargadoaux;
        $encargado->parentescoaux = $request->parentescoaux;
        $encargado->telefonoaux = $request->telefonoaux;
        $encargado->save();
        Flash::success('<button type="button" class="close close-alert-colegio" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><br><br>' . "Se ha Registrado el encargado" . '<br>' . $encargado->nombre . " de forma exitosa!");
        return \Redirect::route('admin.index.encargados');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $encargados = Encargado::find($id);
        return view('admin.encargados.show')->with('encargados', $encargados);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $encargados = Encargado::find($id);
        return view('admin.encargados.edit')->with('encargados', $encargados);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
