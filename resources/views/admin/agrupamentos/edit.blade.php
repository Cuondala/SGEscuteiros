@extends('layout.app')

@section('conteudo')

<section class="section">

    <a class="btn btn-outline-primary mb-3"  href="{{ route('agrupamentos.index') }}"> <i class="fa fa-arrow-left"></i>  Voltar para a listagem</a>

    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Editar Agrupamento</h5>


            <form action="{{ route('agrupamentos.update',$id) }}" method="post">
                @csrf
                @method('PUT')

                <div class="form-group row mb-4">
                    <div class="col-md-6">
                        <select name="nucleo_id" id="" class="form-select">
                            <option value="">Núcleo</option>
                            @foreach ($nucleos as $nucleo )
                                <option value="{{ $nucleo->id }}">{{ $nucleo->nucleo_nome }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6">
                        <input type="text" name="agrupamento_nome" id="" class="form-control" placeholder="Agrupamento">
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
