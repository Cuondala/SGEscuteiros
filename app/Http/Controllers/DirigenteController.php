<?php

namespace App\Http\Controllers;

use App\Models\Agrupamento;
use Illuminate\Http\Request;
use App\Models\Dirigente;
use App\Models\DirigenteFuncao;
use App\Models\Patrulha;
use App\Models\Seccao;
use App\Models\Telefone;
use App\Models\Unidade;
use App\Models\UnidadeAutonoma;
use Illuminate\Support\Facades\DB;

class DirigenteController extends Controller
{
    //
  /* public function __construct(DirigenteFuncao $dirigente_funcaos,Agrupamento $agrupamentos, UnidadeAutonoma $unidade_autonomas, Seccao $seccaos, Unidade $unidades, Patrulha $patrulhas)
   {

    $this->dirigenteFuncao = $dirigente_funcaos;
    $this->agrupamento = $agrupamentos;
    $this->unidadeAutonoma = $unidade_autonomas;
    $this->seccao = $seccaos;
    $this->unidade = $unidades;
    $this->patrulha = $patrulhas;
   }*/

    public function index(){
        $dirigentes=Dirigente::with(['agrupamento',
        'patrulha',
        'dirigenteFuncao',
        'seccao',
        'unidade',
        'unidadeAutonoma'])->get();
        return view('admin.dirigentes.index', compact('dirigentes'));
    }

   /* public function loadFuncoes(Request $request){
        $dataForm = $request->all();
        $dirigente_funcao_id = $dataForm['dirigente_funcao_id'];
        $sql = "Select agrupamento.id from agrupamento";
        $sql = $sql . "agrupamento = '$dirigente_funcao_id'";
        $sql = $sql . "order by agrupamento.nome";
        $agrupamentos = DB::select($sql);
        return view('admin.dirigentes.agrupamento_ajax',['agrupamentos']);
    }*/

    public function create(){

        $agrupamentos=Agrupamento::get();
        $patrulhas=Patrulha::get();
        $dirigente_funcaos=DirigenteFuncao::get();
        $seccaos=Seccao::get();
        $unidades=Unidade::get();
        $unidade_autonomas=UnidadeAutonoma::get();

       /* $dirigente_funcaos = $this->dirigenteFuncao
            ->orderBy('cargo','ASC')->get();
        $agrupamentos = $this->agrupamento
            ->where('id','=',0)
            ->orderBy('agrupamento_nome','ASC')->get();
        $unidade_autonomas = $this->unidadeAutonoma
            ->where('id','=',0)
            ->orderBy('unidade_autonoma_nome', 'ASC');
        $seccaos = $this->seccao
            ->where('id','=',0)
            ->orderBy('seccao_nome', 'ASC');
        $unidades = $this->unidade
            ->where('id','=',0)
            ->orderBy('unidade_nome', 'ASC');
        $patrulhas = $this->patrulha
            ->where('id','=',0)
            ->orderBy('patrulha_nome', 'ASC');*/

        return view('admin.dirigentes.create', compact( [

            'dirigente_funcaos',
            'agrupamentos',
            'unidade_autonomas',
            'seccaos',
            'unidades',
            'patrulhas'
        ]));
    }

    public function store(Request $request){

        DB::beginTransaction();
        //try{

            $agrupamentos = Agrupamento::findOrFail($request->agrupamento_id);
            $dirigente_funcaos=DirigenteFuncao::findOrFail($request->dirigente_funcao_id);
            //$patrulhas=Patrulha::findOrFail($request->patrulha_id);

            //$seccaos=Seccao::findOrFail($request->seccao_id);
            //$unidades=Unidade::findOrFail($request->unidade_id);
            //$unidade_autonomas=UnidadeAutonoma::findOrFail($request->unidade_autonoma_id);

            $dirigentes = Dirigente::create([
                'dirigente_nome' => $request->input('dirigente_nome'),
                'bi' => $request->input('bi'),
                'endereco' => $request->input('endereco'),
                'data_nascimento' => $request->input('data_nascimento'),
                'email' => $request->input('email'),
                'descricao' => $request->input('descricao'),
                'agrupamento_id' => $request->input('agrupamento_id'),
                'dirigente_funcao_id' => $request->input('dirigente_funcao_id')
            ]);

            $dirigentes->save();



            $agrupamentos->dirigente()->save($dirigentes);
            //$patrulhas->dirigente()->save($dirigentes);
            $dirigente_funcaos->dirigente()->save($dirigentes);
            //$seccaos->dirigente()->save($dirigentes);
           // $unidades->dirigente()->save($dirigentes);
            //$unidade_autonomas->dirigente()->save($dirigentes);
            //$telefones->dirigente()->save('$dirigentes');

            $telefones = Telefone::create([
                'numero_telefone'=>$request->input('numero_telefone'),
                'dirigente_id'=>$dirigentes->id,
                'escuteiro_id'=> NULL
            ]);

            $telefones->save();


            $dirigentes->telefone()->save($telefones);


            DB::commit();
            DB::rollBack();
            return redirect()->route('dirigentes.index')->with('success', 'Dirigente cadastrado com sucesso');

       /* }catch(\Exception $e){

            DB::rollBack();
            return redirect()->route('dirigentes.index')->with('error', 'Erro ao cadastrar o Dirigente');
        }*/
    }

    public function show($id){

        $dirigentes=Dirigente::findOrFail($id);
        return view('admin.dirigentes.show',compact('dirigentes'));

      }

    public function edit($id){
        $agrupamentos=Agrupamento::get();
        $patrulhas=Patrulha::get();
        $dirigente_funcaos=DirigenteFuncao::get();
        $seccaos=Seccao::get();
        $unidades=Unidade::get();
        $unidade_autonomas=UnidadeAutonoma::get();

        return view('admin.dirigentes.edit', compact( 'agrupamentos',
        'patrulhas',
        'dirigente_funcaos',
        'seccaos',
        'unidades',
        'unidade_autonomas','id'));

    }

    public function update(Request $request, $id,Telefone $telefones){

        $agrupamentos=Agrupamento::findOrFail($request->agrupamento_id);
        //$patrulhas=Patrulha::findOrFail($request->patrulha_id);
        $dirigente_funcaos=DirigenteFuncao::findOrFail($request->dirigente_funcao_id);
        //$seccaos=Seccao::findOrFail($request->seccao_id);
        //$unidades=Unidade::findOrFail($request->unidade_id);
        //$unidade_autonomas=UnidadeAutonoma::findOrFail($request->unidade_autonoma_id);
        $dirigentes = Dirigente::find($id);
        $dirigentes = $dirigentes->update([
            'dirigente_nome' => $request->input('dirigente_nome'),
            'bi' => $request->input('bi'),
            'endereco' => $request->input('endereco'),
            'data_nascimento' => $request->input('data_nascimento'),
            'email' => $request->input('email'),
            'descricao' => $request->input('descricao'),
            'agrupamento_id' => $request->input('agrupamento_id'),
            'dirigente_funcaos' => $request->input('dirigente_funcao_id'),
            /*'patrulha_id' => $request->input('patrulha_id'),
            'seccao_id' => $request->input('seccao_id'),
            'unidade_id' => $request->input('unidade_id'),
            'unidade_autonoma_id' => $request->input('unidade_autonoma_id')*/
        ]);

        $telefone = $telefones->where('dirigente_id',$id);

        $telefone->update(['numero_telefone'=>$request->numero_telefone]);

        if( $dirigentes )
        {
            return redirect()->route('dirigentes.index',compact('dirigentes'));
        }
        return back();
    }

    public function destroy($id)
    {
        //
        $dirigentes = Dirigente::find( $id );

        if( isset($dirigentes) ){
            $dirigentes->telefone()->delete();
            $dirigentes->delete();
        }
            return back(); // Mensagem para o caso de não ser possível deletar
        return redirect()->route('dirigentes.index');
    }

}
