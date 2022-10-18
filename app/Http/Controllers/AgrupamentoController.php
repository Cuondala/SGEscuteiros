<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agrupamento;
use App\Models\Nucleo;
use App\Models\Regiao;
use App\Models\Religiao;
use Illuminate\Support\Facades\DB;

class AgrupamentoController extends Controller
{
    public function index(){
        $agrupamentos=Agrupamento::with(['nucleo'])->get();
        return view('admin.agrupamentos.index', compact('agrupamentos'));
    }

    public function create(){

        $nucleos=Nucleo::get();
         return view('admin.agrupamentos.create', compact( 'nucleos'));
    }

    public function store(Request $request){


        DB::beginTransaction();
        try{

            $nucleos=Nucleo::findOrFail($request->nucleo_id);

            $agrupamentos=new Agrupamento();
            $agrupamentos->agrupamento_nome=$request->agrupamento_nome;
            $agrupamentos->descricao=$request->descricao;

            $nucleos->agrupamento()->save($agrupamentos);

            DB::commit();

            return redirect()->route('agrupamentos.index')->with('success', 'Agrupamento cadastrado com sucesso');

        }catch(\Exception $e){

            DB::rollBack();
            return redirect()->route('agrupamentos.index')->with('error', 'Erro ao cadastrar o Agrupamento');
        }
    }

    public function show($id){

        $agrupamentos=Agrupamento::findOrFail($id);
         return view('admin.agrupamentos.show',compact('agrupamentos'));

      }

      public function edit($id){
        $nucleos=Nucleo::get();
        return view('admin.agrupamentos.edit', compact('nucleos','id'));
    }

    public function update(Request $request, $id){
        $nucleos=Nucleo::findOrFail($request->nucleo_id);
        $agrupamentos = Agrupamento::find($id);
        $agrupamentos = $agrupamentos->update([
            'agrupamento_nome' => $request->input('agrupamento_nome'),
            'descricao' => $request->input('descricao'),
            'nucleo_id' => $request->input('nucleo_id')
        ]);

        if( $agrupamentos )
        {
            return redirect()->route('agrupamentos.index',compact('agrupamentos'));
        }
        return back();
    }

    public function destroy($id)
    {
        //
        $agrupamentos = Agrupamento::find( $id );
        if( !$agrupamentos )
            return back(); //Mensagem para o caso de n encontrar
        if( !$agrupamentos->delete() )
            return back(); // Mensagem para o caso de não ser possível deletar
        return redirect()->route('agrupamentos.index');
    }
}
