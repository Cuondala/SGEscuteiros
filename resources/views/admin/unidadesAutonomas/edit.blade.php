@extends('layout.app')

@section('conteudo')

<section class="section">

    {{--  <a class="btn btn-primary mb-3"  data-bs-toggle="modal" data-bs-target="#create">Novo Nucleo</a> --}}

    <a href="{{ route('ua.index') }}"   class="btn btn-outline-primary mb-3" ><i class="fa fa-arrow-left"></i>  Voltar para a listagem</a>

    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Actualizar Uni.Autonoma</h5>




            <!-- Table with stripped rows -->

            <form action="{{ route('ua.update', $uas->id) }}" method="post">
                @csrf
                @method('PUT')

                <div class="form-group row mb-4">

                    <div class="col-md-4">
                        <input type="text"
                               name="unidade_autonoma_nome"
                               id="" class="form-control"
                               placeholder="Unidade Atutonoma"
                               value="{{ $uas->unidade_autonoma_nome ?? old('unidade_autonoma_nome ') }}"
                        >
                    </div>

                    <div class="col-md-4">
                        <select name="nucleo_id" id="" class="form-select">
                            <option value="">Núcleo</option>
                            @foreach ($nucleos as $nucleo )
                                <option value="{{ $nucleo->id }}" {{ old('nucleo_id', $uas->nucleo->id ?? '')== $nucleo->id ? 'selected': '' }}>
                                    {{ $nucleo->nucleo_nome }}
                                </option>
                            @endforeach
                        </select>
                    </div>



                 <div class="col-md-4">
                        <select name="seccao_id" id="" class="form-select">
                            <option value="">Secção</option>
                            @foreach ($seccoes as $seccao )
                                <option value="{{ $seccao->id }}" {{ old('seccao_id', $uas->seccao_id ?? '') == $seccao->id ? 'selected': ''}}>
                                    {{ $seccao->seccao_nome }}
                                </option>
                            @endforeach
                        </select>
                    </div>



                <div class="form-group mt-4">
                    <div class="col-md-12">
                        <textarea name="descricao"
                                  id=""
                                  cols="30"
                                  rows="10"
                                  class="form-control"
                                  placeholder="Descrição"
                                  value="{{$uas->descricao ?? old('descricao') }}">
                        </textarea>
                    </div>


                </div>


                <div class="form-group mt-4">
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
