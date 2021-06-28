<?php

namespace App\Http\Controllers;

use App\Models\pessoa;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
   
    public function __construct(Pessoa $pessoa){
        $this ->pessoa = $pessoa;
    }

    public function index()
    {
        $pessoas = $this->pessoa->all();
        return $pessoas;
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
         //dd($request->all());
        $pessoa = $this->pessoa->create($request->all());
        return $pessoa;
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $pessoa = $this->pessoa->find($id);
      
       $array = [];
       $cursos = $pessoa->pessoacurso()->get();
      $x =  $cursos->all();
       if($cursos){
           foreach($cursos as $cursos){

            array_push($array, ['id_curso'  => $cursos->id, 'nome_curso' => $cursos->nome]);
            
           }
           
       }
       array_push($array, $pessoa);
       //return $array+$pessoa;
       return $array;
       
      // return $pessoa;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function edit(pessoa $pessoa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pessoa = $this->pessoa->find($id);
        $pessoa->update($request->all());
        return $pessoa;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pessoa = $this->pessoa->find($id);
        $pessoa->delete($id);
        return [ 'msg' => "A marca foi excluida com sucesso!"];
    }
}
