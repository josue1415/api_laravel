<?php

namespace App\Http\Controllers;

use App\Models\usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('microempresas/microempresas-fichas.create');
        return usuarios::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return usuarios::all();
        // return view('microempresas/microempresas-fichas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return redirect('microempresas-fichas/propuestas/create/')->with('flash_message', 'MicroempresasFicha added!');
       
        $article = usuarios::create($request->all());
        return response()->json($article, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function show(usuarios $usuarios)
    {
        // $prueba = "Hola";
        // return view('microempresas/microempresas-fichas.create', compact(['prueba']));
        return $usuarios;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function edit(usuarios $usuarios)
    {
        $prueba = $usuarios;
        return view('microempresas/microempresas-fichas.create', compact(['usuarios']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, usuarios $usuarios)
    {
        // $requestData = $request->all();
        // $microempresasficha = usuarios::findOrFail($usuarios->id);
        // $microempresasficha->update($requestData);
        
        $usuarios->update($request->all());
        return response()->json($usuarios, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function destroy(usuarios $usuarios)
    {
        // $PollMember = usuarios::where('id', $usuarios->id);
        $usuarios->delete();
        return response()->json(null, 204);
    }
}
