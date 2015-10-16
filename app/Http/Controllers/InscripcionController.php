<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Inscripcion;
use App\Capacitacion;

class InscripcionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $table = array("Nombre", "Identificacion", "Fecha de Inscripcion", "capacitacion");
        return view('capacitacion/inscripcion/list')->with("list", Inscripcion::all())->with("table", $table);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $capacitaciones = Capacitacion::all();
        $select = array();
        foreach($capacitaciones as $capacitacion){
            $select[$capacitacion->id] = $capacitacion->tema;
        }
        return view('capacitacion/inscripcion/create')->with("capacitaciones", $select)->with("url", "inscripcion");
    }

    public function confirm($id){
        $inscripcion = Inscripcion::findOrFail($id);
        $inscripcion->confirmed = 1;
        $inscripcion->save();
        return redirect()->route('capacitacion.show',["id" => $inscripcion->capacitacion_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inscripcion = new Inscripcion;
        $inscripcion->name = $request->name;
        $inscripcion->identification = $request->identification;
        $inscripcion->inscripcion = $request->inscripcion;
        $inscripcion->capacitacion_id = $request->capacitacion;
        $inscripcion->save();
        return redirect()->route('inscripcion.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
