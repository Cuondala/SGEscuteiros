<?php

namespace App\Http\Controllers;

use App\Models\Nucleo;
use App\Models\Seccao;
use Illuminate\Http\Request;
use App\Models\UnidadeAutonoma;
use Illuminate\Support\Facades\DB;

class UnidadeAutonomaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$uas=UnidadeAutonoma::with(['nucleo', 'seccao'])->get();

        $uas=DB::table('unidade_autonomas')
                    ->join('nucleos', 'unidade_autonomas.nucleo_id', '=', 'nucleos.id')
                    ->join('seccaos', 'unidade_autonomas.seccao_id', '=', 'seccaos.id')
                    ->select('unidade_autonomas.*','nucleos.nucleo_nome', 'seccaos.seccao_nome' )->get();
        return view('admin.unidadesAutonomas.index', compact('uas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $nucleos=Nucleo::all();
        $seccoes=Seccao::all();

        return view('admin.unidadesAutonomas.create', compact('nucleos', 'seccoes'));

        //return response()->json(['nucleos'=>$nucleos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $ua=UnidadeAutonoma::create($request->all());

        return redirect()->route('ua.index')->with('success', 'Unidade Autonoma criada com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $uas=UnidadeAutonoma::findOrFail($id);

        $nucleos=Nucleo::all();
        $seccoes=Seccao::all();

        return view('admin.unidadesAutonomas.edit' , compact('uas','nucleos','seccoes'));
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

        $uas=UnidadeAutonoma::findOrFail($id);
        $uas->update($request->all());

        return redirect()->route('ua.index')->with('success', 'Unidade Autonoma actualizada com sucesso');
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

        $uas=UnidadeAutonoma::findOrFail($id);

        $uas->delete();
        return redirect()->route('ua.index')->with('success', 'Unidade Autonoma eliminada com sucesso');
    }
}
