<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\VeiculoRequest;
use App\Veiculo;

class VeiculosController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {         
        $veiculos = Veiculo::all();
        return view('painel.veiculos.index', compact('veiculos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        
        $users = \App\User::all(['id', 'name', 'role']);        
        return view('painel.veiculos.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VeiculoRequest $request)
    {
        $data = $request->all();  
        Veiculo::create($data);	
	    return redirect()->route('veiculos.index');        
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
        
        $veiculo = Veiculo::find($id);
        $users = \App\User::all(['id', 'name', 'role']);
        
        return view('painel.veiculos.edit', compact('veiculo', 'users'));        

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VeiculoRequest $request, $id)
    {
        
        $data = $request->all();       

        $veiculo = Veiculo::find($id);
	    $veiculo->update($data);

        return redirect()->route('veiculos.index');
       
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
