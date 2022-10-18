@extends('layout.app')

@section('conteudo')

<section class="section">

    {{--  <a class="btn btn-primary mb-3"  data-bs-toggle="modal" data-bs-target="#create">Novo Nucleo</a> --}}

    <a href="{{ route('agrupamentos.index') }}"   class="btn btn-outline-primary mb-3" ><i class="fa fa-arrow-left"></i>  Voltar para a listagem</a>

    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Novo Agrupamentos</h5>




            <!-- Table with stripped rows -->

            <form action="{{ route('agrupamentos.update', $agrupamentos->id ) }}" method="post">
                @csrf
                @method("PUT")
                <div class="form-group row mb-4">
                    <div class="col-md-6">
                        <select name="nucleo_id" id="" class="form-select">
                            <option value="">Núcleo</option>
                            @foreach ($nucleos as $nucleo )

                                if({{ $nucleo->id === $agrupamentos->nucleo_id }}){
                                    <option selected value="{{ $nucleo->id }}">
                                        {{ $nucleo->nucleo_nome }}
                                    </option>
                                }

                            @endforeach
                        </select>
                    </div>


                    <div class="col-md-6">
                        <input type="text"
                               name="agrupamento_nome"
                               id=""
                               class="form-control"
                               placeholder="Agrupamentos"
                               value="{{ $agrupamentos->agrupamento_nome ??  old('agrupamento_nome') }}"
                        >
                    </div>
                </div>


                <div class="form-group mb-4">
                    <div class="col-md-12">
                        <textarea name="descricao"
                                  id=""
                                  cols="30"
                                  rows="10"
                                  class="form-control"
                                  placeholder="Descrição"
                                  value="{{ $agrupamentos->descricao ?? old('descricao') }}">
                        </textarea>
                    </div>


                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-outline-primary">Registrar</button>
                </div>


            </form>


            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>

@endsection
