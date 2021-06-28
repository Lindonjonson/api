<?php

namespace App\Http\Controllers;

use App\Models\pessoacurso;
use Illuminate\Http\Request;

class PessoacursoController extends Controller
{
    public function __construct(pessoacurso $pessoacurso){
        $this ->pessoacurso = $pessoacurso;
    }
    public function index()
    {
    return "chegou aqui";
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
        $pessoacurso = $this->pessoacurso->create($request->all());
        return $pessoacurso;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pessoacurso  $pessoacurso
     * @return \Illuminate\Http\Response
     */
    public function show(pessoacurso $pessoacurso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pessoacurso  $pessoacurso
     * @return \Illuminate\Http\Response
     */
    public function edit(pessoacurso $pessoacurso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pessoacurso  $pessoacurso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pessoacurso $pessoacurso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pessoacurso  $pessoacurso
     * @return \Illuminate\Http\Response
     */
    public function destroy(pessoacurso $pessoacurso)
    {
        //
    }
}
