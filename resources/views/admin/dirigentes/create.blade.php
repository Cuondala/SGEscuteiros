@extends('layout.app')

@section('conteudo')

<section class="section">

    <a class="btn btn-outline-primary mb-3"  href="{{ route('dirigentes.index') }}"> <i class="fa fa-arrow-left"></i>  Voltar para a listagem</a>

    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Novo Núcleo</h5>


            <form action="{{ route('nucleos.store') }}" method="post">
                @csrf




                <div class="form-group row mb-4">
                    <div class="col-md-3">
                        <input type="text"
                               name="dirigente_nome"
                               id=""
                               placeholder="Nome"
                               value="{{   old('dirigente_nome') }}"
                               class="form-control">
                    </div>
                    <div class="col-md-3">
                        <input type="text"
                               name="bi"
                               id=""
                               placeholder="Bilhete de Indentidade"
                               value="{{   old('bi') }}"
                               class="form-control">
                    </div>
                    <div class="col-md-3">
                        <input type="email"
                               name="email"
                               id=""
                               placeholder="Email"
                               value="{{   old('email') }}"
                               class="form-control">
                    </div>
                    <div class="col-md-3">
                        <input type="date"
                               name="data_nascimento"
                               id=""
                               value="{{   old('data_nascimento') }}"
                               class="form-control">
                    </div>
                    {{--
                    <div class="col-md-3">
                        <select name="regiao_id" id="" class="form-select">
                            <option value="">Municipio</option>
                            {{-- @foreach ($regiaos as $regiao )
                                <option value="{{ $regiao->id }}">
                                    {{ $regiao->regiao_nome }}
                                </option>
                            @endforeach

                        </select>
                    </div>
                    --}}

                </div>


                <div class="form-group row mb-4">
                    <div class="col-md-6">
                        <input type="text"
                               name="endereco"
                               id="" class="form-control"
                               placeholder="Endereco"
                               value="{{   old('endereco') }}"
                        >
                    </div>
                    <div class="col-md-3">
                        <select name="dirigente_funcao_id" id="" class="form-select">
                            <option value="">Cargo</option>

                        </select>
                    </div>
                    <div class="col-md-3">
                        <select name="dirigente_funcao_id" id="" class="form-select">
                            <option value="">Agrupamentos</option>

                        </select>
                    </div>


                </div>

                <div class="form-group row mb-4">
                    <div class="col-md-3">
                        <select name="dirigente_funcao_id" id="" class="form-select">
                            <option value="">Patrulhas</option>

                        </select>
                    </div>

                    <div class="col-md-3">
                        <select name="dirigente_funcao_id" id="" class="form-select">
                            <option value="">Seccao</option>

                        </select>
                    </div>

                    <div class="col-md-3">
                        <select name="dirigente_funcao_id" id="" class="form-select">
                            <option value="">Unidade</option>

                        </select>
                    </div>

                    <div class="col-md-3">
                        <select name="dirigente_funcao_id" id="" class="form-select">
                            <option value="">Unidades Autonomas</option>

                        </select>
                    </div>


                </div>

                <div class="form-group mb-4">
                    <div class="col-md-12">
                        <textarea name="descricao"
                                  id=""
                                  cols="10"
                                  rows="10"
                                  class="form-control"
                                  placeholder="descricao"
                                  value="{{  old('descricao') }}">
                        </textarea>
                    </div>

                </div>



                <div class="form-group">
                    <button type="submit" class="btn btn-outline-primary">Registrar</button>
                </div>


            </form>

          </div>
        </div>

      </div>
    </div>
  </section>

@endsection
