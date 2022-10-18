@extends('layout.app')

@section('conteudo')

<section class="section">

    {{--  <a class="btn btn-primary mb-3"  data-bs-toggle="modal" data-bs-target="#create">Novo Nucleo</a> --}}

    <a class="btn btn-outline-primary mb-3"  href="{{ route('nucleos.index') }}"><i class="fa fa-arrow-left"></i>  Voltar para a listagem</a>

    <div class="row">
      <div class="col-lg-12">

        <div class="card">

          <div class="card-body">
            <h5 class="card-title">{{  $nucleos->nucleo_nome }} </h5>

            <strong>Regiao</strong>: {{ $nucleos->regiao->regiao_nome }}<br>
            <strong>Religiao</strong>: {{ $nucleos->religiao->implode('religiao_nome') }}<br>
            <strong>Descricao</strong>: {{ $nucleos->descricao }}







            <!-- Table with stripped rows -->

            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>

@endsection
