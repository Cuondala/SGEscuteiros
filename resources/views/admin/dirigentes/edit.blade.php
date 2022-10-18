@extends('layout.app')

@section('conteudo')

<section class="section">

    <a class="btn btn-outline-primary mb-3"  href="{{ route('dirigentes.index') }}"> <i class="fa fa-arrow-left"></i>  Voltar para a listagem</a>

    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Editar Dirigente</h5>


            <form action="{{ route('dirigentes.update', $id) }}" method="post">
                @method('PUT')
                @csrf
                <div class="form-group row mb-4">
                    <div class="col-md-3">
                        <input type="text" name="dirigente_nome" id="" class="form-control" placeholder="Dirigente">
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="bi" id="" class="form-control" placeholder="Bilhete de Identidade">
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="endereco" id="" class="form-control" placeholder="Endereço">
                    </div>
                    <div class="col-md-3">
                        <input type="date" name="data_nascimento" id="" class="form-control" placeholder="Data de Nascimnto">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <div class="col-md-3">
                        <input type="text" name="email" id="" class="form-control" placeholder="Email">
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="numero_telefone" id="" class="form-control" placeholder="Telefone">
                    </div>
                    <div class="col-md-3">
                        <select name="dirigente_funcao_id" id="" class="form-select">
                            <option value="">Cargo</option>
                            @foreach ($dirigente_funcaos as $dirigente_funcao )
                                <option value="{{ $dirigente_funcao->id }}">{{ $dirigente_funcao->cargo }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select name="agrupamento_id" id="" class="form-select">
                            <option value="">Agrupamento</option>
                            @foreach ($agrupamentos as $agrupamento )
                                <option value="{{ $agrupamento->id }}">{{ $agrupamento->agrupamento_nome }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <div class="col-md-3">
                        <select name="unidade_autonoma_id" id="" class="form-select">
                            <option value="">Unidade Autonoma</option>
                            @foreach ($unidade_autonomas as $unidade_autonoma )
                                <option value="{{ $unidade_autonoma->id }}">{{ $unidade_autonoma->unidade_autonoma_nome }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select name="seccao_id" id="" class="form-select">
                            <option value="">Secção</option>
                            @foreach ($seccaos as $seccao )
                                <option value="{{ $seccao->id }}">{{ $seccao->seccao_nome }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select name="unidade_id" id="" class="form-select">
                            <option value="">Unidade</option>
                            @foreach ($unidades as $unidade )
                                <option value="{{ $unidade->id }}">{{ $unidade->unidade_nome }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select name="patrulha_id" id="" class="form-select">
                            <option value="">Patrulha</option>
                            @foreach ($patrulhas as $patrulha )
                                <option value="{{ $patrulha->id }}">{{ $patrulha->patrulha_nome }}</option>
                            @endforeach
                        </select>
                    </div>

                </div>


                <div class="form-group mb-4">
                    <div class="col-md-12">
                        <textarea name="descricao" id="" cols="30" rows="10" class="form-control" placeholder="Descrição"></textarea>
                    </div>


                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-outline-primary">Salvar</button>
                </div>
            </form>

          </div>
        </div>

      </div>
    </div>
  </section>

@endsection
