<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Capacitacion;
use App\Capacitador;
use App\Inscripcion;

class CapacitacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $table = array("Tema", "Fecha de entrenamiento", "capacitador", "Fecha de Creacion");
        return view('capacitacion/capacitacion/list')->with("list", Capacitacion::all())->with("table", $table);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $capacitadores = Capacitador::all();
        $select = array();
        foreach($capacitadores as $capacitador){
            $select[$capacitador->id] = $capacitador->name;
        }
        return view('capacitacion/capacitacion/create')->with("capacitadores", $select)->with("url","capacitacion");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $capacitacion = new Capacitacion;
        $capacitacion->tema = $request->tema;
        $capacitacion->date_training = $request->date_training;
        $capacitacion->capacitador_id = $request->capacitador;
        $capacitacion->save();
        return redirect()->route('capacitacion.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $list = Inscripcion::where("capacitacion_id", "=", $id)->get();
        $capacitacion = Capacitacion::findOrFail($id);
        $count = $list->count();

        $table = array("Capacitacion", "Nombre", "Identificacion","Asistencia");
        return view('capacitacion/capacitacion/inscripciones/list')->with("list", $list)->with("table", $table)
            ->with("capacitacion",$capacitacion);
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
