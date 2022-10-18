<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agrupamento;
use App\Models\Nucleo;
use Illuminate\Support\Facades\DB;

class AgrupamentoController extends Controller
{
    //

    public function index(){

       $agrupamentos=Agrupamento::with(['nucleo'])->get();
       //$nucleos=$agrupamentos->nucleo;

       // $agrupamentos=DB::table('agrupamentos')->join('nucleos','nucleos.id', '=', 'nucleo_id')->get();
        return view('admin.agrupamentos.index', compact('agrupamentos'));
    }

    public function create(Request $request){

       $nucleos=Nucleo::all();

       return view('admin.agrupamentos.create', compact('nucleos'));
    }

    public function store(Request $request){

        /*
        $nucleos=Nucleo::findOrFail($request->nucleos_id);
        $agrupamentos= new Agrupamento();
        $agrupamentos->agrupamento_nome=$request->agrupamento_nome;
        $agrupamentos->descricao=$request->descricao;
        $nucleos->agrupamentos->save($agrupamentos);
        */
        DB::beginTransaction();

        try{

            $agrupamentos=Agrupamento::create($request->all());
            DB::commit();
            return redirect()->route('agrupamentos.index')->with('success','Agrupamento Cadastrado com sucesso');
        }
        catch(\Exception $e){

            DB::rollBack();
            return redirect()->route('agrupamentos.index')->with('error', 'Erro ao Cadastrar o Agrupamento');
        }





    }

    public function show($id){

        dd('Show =', $id);
    }

    public function edit($id){

        $agrupamentos=Agrupamento::findOrFail($id);
        $nucleos=Nucleo::get();
            return view('admin.agrupamentos.edit', compact('agrupamentos', 'nucleos'));
    }

    public function update(Request $request, $id){

        $agrupamentos=Agrupamento::findOrFail($id);

        DB::beginTransaction();
        try{


            $agrupamentos->update($request->all());
            DB::commit();
            return redirect()->route('agrupamentos.index')->with('success','Agrupamento actualizado com sucesso');


        }
        catch(\Exception $e){

            DB::rollBack();
            return redirect()->route('agrupamentos.index')->with("error", "Erro ao Actualizar o Agrupamento");
        }


    }

    public function destroy($id){

        $agrupamentos=Agrupamento::findOrFail($id);
        $agrupamentos->delete();
        return redirect()->route('agrupamentos.index')->with('success', 'Agrupamento Eliminado com sucesso');

    }
}
