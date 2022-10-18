@extends('layout.app')

@section('conteudo')

<section class="section">

    <a class="btn btn-outline-primary mb-3"  href="{{ route('escuteiros.index') }}"> <i class="fa fa-arrow-left"></i>  Voltar para a listagem</a>

    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Editar Escuteiro</h5>


            <form action="{{ route('escuteiros.update',$escuteiros->id) }}" method="post">
                @method('PUT')
                @csrf
                <div class="form-group row mb-4">
                    <div class="col-md-4">
                        <input type="text" name="escuteiro_nome" id="" class="form-control" placeholder="Escuteiro" value="{{ $escuteiros->escuteiro_nome }}">
                    </div>

                    <div class="col-md-4">
                        <input type="text" name="bi" id="" class="form-control" placeholder="Bilhete de Identidade" value="{{ $escuteiros->bi }}">
                    </div>

                    <div class="col-md-4">
                        <input type="text" name="endereco" id="" class="form-control" placeholder="Endereço" value="{{ $escuteiros->endereco}} ">
                    </div>
                </div>

                <div class="form-group row mb-4">

                <div class="form-group row mb-4">
                    <div class="col-md-4">
                        <input type="date" name="data_nascimento" id="" class="form-control" placeholder="Data de Nascimnto" value="{{ $escuteiros->data_nascimento }} ">
                    </div>

                    <div class="col-md-4">
                        <input type="text" name="email" id="" class="form-control" placeholder="Email" value="{{ $escuteiros->email }}">
                    </div>

                    <div class="col-md-4">
                        <input type="text" name="numero_telefone" id="" class="form-control" placeholder="Telefone" value="{{ $escuteiros->telefone->numero_telefone }}">
                    </div>
                </div>

                <div class="form-group row mb-4">

                    <div class="col-md-3">
                        <input type="text" name="responsavel_1" id="" class="form-control" placeholder="Pai">
                    </div>

                    <div class="col-md-3">
                        <input type="text" name="responsavel_2" id="" class="form-control" placeholder="Mãe">
                    </div>

                    <div class="col-md-3">
                        <input type="text" name="estado" id="" class="form-control" placeholder="Estado" value="{{ $escuteiros->estado }}">
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
                        <textarea name="descricao" id="" cols="30" rows="10" class="form-control" placeholder="Descrição" value="{{ $escuteiros->descricao }}"></textarea>
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
