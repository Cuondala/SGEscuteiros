<?php

namespace App\Http\Controllers;

use App\Models\Nucleo;
use App\Models\Regiao;
use App\Models\Religiao;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Monolog\Registry;
use PhpParser\Node\Stmt\TryCatch;

class NucleoController extends Controller
{
    //

    public function index(){

       $nucleos=Nucleo::with(['religiao','regiao'])->get();

/*
       $nucleos=DB::table('nucleos')
                ->join('regiaos', 'nucleos.regiao_id','=','regiaos.id')
                //->join('nucleos_religiaos', 'nucleos.id','=', 'nucleos_religiaos.nucleo_id')
                //->join('religiaos', 'religiaos.id','=', 'nucleos_religiaos.religiao_id')
                ->select('nucleos.*', 'regiaos.regiao_nome')
                ->get();

*/

        return view('admin.nucloes.index', compact('nucleos'));

    }

    public function create(){

        $religiaos=Religiao::get();
        $regiaos=Regiao::get();

        return view('admin.nucloes.create', compact('religiaos', 'regiaos'));
    }

    public function store(Request $request){


        DB::beginTransaction();
        try{

            /*
            //$nucleos=Nucleo::create($request->all());

            $regiao->nucleo->create([
                'nucleo_nome'=>$request->nucleo_nome,
                'descricao'=>$request->descricao
            ]);

           // $nucleos->religiao()->attach($request->religiao_id);
            */
            $regiaos=Regiao::findOrFail($request->regiao_id);

            $nucleos=new Nucleo();
            $nucleos->nucleo_nome=$request->nucleo_nome;
            $nucleos->descricao=$request->descricao;

            //No nucleo tem parentese porque ainda nao foi adicionado um id da religiao na tabela

            $regiaos->nucleo()->save($nucleos);

            $nucleos->religiao()->attach($request->religiao_id);


            DB::commit();

            //Toastr::success("Núcleo Cadastrado com sucesso", "success", ['progressBarr'=>true, 'closeButton'=>true]);
            return redirect()->route('nucleos.index')->with('success', 'Nucleo cadastrado com sucesso');

        }catch(\Exception $e){

            DB::rollBack();
            //Toastr::error("Falha ao cadastrar o Núcleo", "error", ['progressBarr'=>true, 'closeButton'=>true]);
            return redirect()->route('nucleos.index')->with('error', 'Erro ao cadastrar o Nucleo'. $e->getMessage());
        }
    }
    public function show($id){

        $nucleos=Nucleo::findOrFail($id);
        $religiaos=$nucleos->religiao;
         return view('admin.nucloes.show', compact('nucleos', 'religiaos'));

      }
    public function edit($id){
        try{

            $nucleos=Nucleo::findOrFail($id);

            $regiaos=Regiao::get();
            $religiaos=Religiao::get();


            return view('admin.nucloes.edit', compact('nucleos', 'religiaos', 'regiaos'));
        }
        catch(\Exception $e){

            return redirect()->back()->with('warning', 'O id selecionado nao existe');
        }
    }
    public function update(Request $request, $id){

        DB::beginTransaction();
        try{


            $nucleos=Nucleo::findOrFail($id);

            $nucleos->update($request->all());

            $nucleos->religiao()->sync($request->religiao_id);

            DB::commit();

            return redirect()->route('nucleos.index')->with('success','Nucleo Actualizado com sucesso');


        }
        catch(\Exception $e){

            DB::rollBack();

            return redirect()->route('nucleos.index')->with('error', 'Erro ao actualizar o Nucleo');
        }


    }
    public function destroy($id){


        DB::beginTransaction();
        try{

            $nucleos=Nucleo::findOrFail($id);
            $nucleos->religiao()->detach();
            $nucleos->delete();

            DB::commit();
            return redirect()->route('dirigentes.index')->with('success', 'nucleo eliminado com sucesso');

        }catch(\Exception $e){

            DB::rollBack();
            return redirect()->route('nucleos.index')->with('error', 'Erro ao eliminar o nucleo');

        }








    }
    //public function store(Request $request){}






}
