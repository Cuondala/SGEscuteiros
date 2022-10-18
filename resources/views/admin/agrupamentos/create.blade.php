@extends('layout.app')

@section('conteudo')

<section class="section">

    <a class="btn btn-outline-primary mb-3"  href="{{ route('agrupamentos.index') }}"> <i class="fa fa-arrow-left"></i>  Voltar para a listagem</a>

    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Novo Agrupamento</h5>


            <form action="{{ route('agrupamentos.store') }}" method="post">
                @csrf

                <div class="form-group row mb-4">
                    <div class="col-md-6">
                        <input type="text" name="agrupamento_nome" id="" class="form-control" placeholder="Agrupamento">
                    </div>

                    <div class="col-md-6">
                        <select name="nucleo_id" id="" class="form-select">
                            <option value="">Núcleo</option>
                            @foreach ($nucleos as $nucleo )
                                <option value="{{ $nucleo->id }}">{{ $nucleo->nucleo_nome }}</option>
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
                    <button type="submit" class="btn btn-outline-primary">Registrar</button>
                </div>
            </form>

          </div>
        </div>

      </div>
    </div>
  </section>

@endsection
