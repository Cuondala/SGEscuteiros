<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Escuteiro;
use App\Models\Parente;
use App\Models\Patrulha;
use App\Models\Telefone;
use Illuminate\Support\Facades\DB;

class EscuteiroController extends Controller
{
    //
    public function index(){
        $escuteiros=Escuteiro::with([
        'patrulha',
        ])->get();
        return view('admin.escuteiros.index', compact('escuteiros'));
    }

    public function create(){

        $patrulhas=Patrulha::get();

        return view('admin.escuteiros.create', compact( [
        'patrulhas',
        ]));
    }

    public function store(Request $request){

        DB::beginTransaction();


            $parentes = Parente::create([
                'responsavel_1'=>$request->input('responsavel_1'),
                'responsavel_2'=>$request->input('responsavel_2'),
                'dirigente_id'=>NULL
            ]);

            $parentes->save();

            $patrulhas=Patrulha::findOrFail($request->patrulha_id);

            $escuteiros = Escuteiro::create([
                'escuteiro_nome' => $request->input('escuteiro_nome'),
                'bi' => $request->input('bi'),
                'endereco' => $request->input('endereco'),
                'data_nascimento' => $request->input('data_nascimento'),
                'email' => $request->input('email'),
                'descricao' => $request->input('descricao'),
                'patrulha_id' => $request->input('patrulha_id'),
                'parente_id' => $parentes->id,
                'estado'=> $request->input('estado')
            ]);

            $escuteiros->save();

            $patrulhas->escuteiro()->save($escuteiros);

            $escuteiros->telefone()->create($request->all());

            /*$telefones = Telefone::create([
            'numero_telefone'=>$request->input('numero_telefone'),
            'escuteiro_id'=>$escuteiros->id,
            'dirigente_id'=>NULL
        ]);

        $telefones->save();*/



            DB::commit();
            return redirect()->route('escuteiros.index')->with('success', 'Escuteiro cadastrado com sucesso');


    }

    public function show($id){

        $escuteiros=Escuteiro::findOrFail($id);
         return view('admin.escuteiros.show',compact('escuteiros'));

      }

      public function edit($id){
        $escuteiros=Escuteiro::findOrFail($id);
        $patrulhas=Patrulha::get();

        return view('admin.escuteiros.edit', compact( [
        'patrulhas','escuteiros'
        ]));

    }

    public function update(Request $request, $id,Telefone $telefones){


        $patrulhas=Patrulha::findOrFail($request->patrulha_id);
        $escuteiros = Escuteiro::find($id);


        Parente::where('id',$escuteiros->parente_id)->update(['responsavel_1'=>$request->responsavel_1,'responsavel_2'=>$request->responsavel_2]);

        $escuteiros = $escuteiros->update($request->all());

        $telefone = $telefones->where('escuteiro_id',$id);

        $telefone->update(['numero_telefone'=>$request->numero_telefone]);

        if( $escuteiros )
        {
            return redirect()->route('escuteiros.index',compact('escuteiros'));
        }
        return back();
    }

    public function destroy($id)
    {
        //
        $escuteiros = Escuteiro::find( $id );
        $parente_id = $escuteiros->parente_id;

        if( isset($escuteiros) ){
            $escuteiros->telefone()->delete();
            $escuteiros->delete();
            Parente::where('id',$parente_id)->delete();
        }

            return back(); // Mensagem para o caso de não ser possível deletar
        return redirect()->route('escuteiros.index');
    }
}
