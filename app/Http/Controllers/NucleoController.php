<?php

namespace App\Http\Controllers;

use App\Models\Nucleo;
use App\Models\Regiao;
use App\Models\Religiao;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NucleoController extends Controller
{
    //

    public function index(){

       $nucleos=Nucleo::with(['regiao','religiao'])->get();

       /*
       $nucleos=DB::table('nucleos')
                ->join('nucleos_religiaos', 'nucleos.id','=', 'nucleos_religiaos.nucleo_id')
                ->join('religiaos', 'religiaos.id','=', 'nucleos_religiaos.religiao_id')
                ->join('regiaos', 'regiaos.id','=','nucleos.regiao_id')
                ->select('nucleos.*', 'religiaos.religiao_nome', 'regiaos.regiao_nome')
                ->get()->dd();

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
            $regiaos->nucleo()->save($nucleos);

            $nucleos->religiao()->sync($request->religiao_id);

            DB::commit();

            //Toastr::success("Núcleo Cadastrado com sucesso", "success", ['progressBarr'=>true, 'closeButton'=>true]);
            return redirect()->route('nucleos.index')->with('success', 'Nucleo cadastrado com sucesso');

        }catch(\Exception $e){

            DB::rollBack();
            //Toastr::error("Falha ao cadastrar o Núcleo", "error", ['progressBarr'=>true, 'closeButton'=>true]);
            return redirect()->route('nucleos.index')->with('error', 'Erro ao cadastrar o Nucleo');
        }
    }
    public function show($id){

        $nucleos=Nucleo::findOrFail($id);
         return view('admin.nucloes.modal.show');

      }
    public function edit($id){}
    public function update(Request $request, $id){}
    public function destroy($id){}
    //public function store(Request $request){}






}
