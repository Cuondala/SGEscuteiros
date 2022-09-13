@extends('layout.app')

@section('conteudo')

<section class="section">

    <a class="btn btn-outline-primary mb-3"  href="{{ route('nucleos.index') }}"> <i class="fa fa-arrow-left"></i>  Voltar para a listagem</a>

    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Novo Núcleo</h5>


            <form action="{{ route('nucleos.store') }}" method="post">
                @csrf

                <div class="form-group row mb-4">
                    <div class="col-md-4">
                        <select name="regiao_id" id="" class="form-select">
                            <option value="">Região</option>
                            @foreach ($regiaos as $regiao )
                                <option value="{{ $regiao->id }}">{{ $regiao->regiao_nome }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-4">
                        <select name="religiao_id[]" id="" class="form-select">
                            <option value="">Religião</option>
                            @foreach ($religiaos as $religiao )
                                <option value="{{ $religiao->id }}">{{ $religiao->religiao_nome }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-4">
                        <input type="text" name="nucleo_nome" id="" class="form-control" placeholder="Núcleo">
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
