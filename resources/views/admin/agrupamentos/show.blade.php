@extends('layout.app')

@section('conteudo')

<section class="section">

    {{--  <a class="btn btn-primary mb-3"  data-bs-toggle="modal" data-bs-target="#create">Novo Nucleo</a> --}}

    <a class="btn btn-primary mb-3"  href="{{ route('agrupamentos.index') }}">Voltar para a listagem</a>

    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">{{ $agrupamentos->agrupamento_nome }}</h5>



            </form>

            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Agrupamento</th>
                  <th scope="col">Núcleo</th>
                  <th scope="col">Descrição</th>
                </tr>
              </thead>
              <tbody>

                <th scope="row">{{ $agrupamentos->id }}</th>
                    <td>{{ $agrupamentos->agrupamento_nome }}</td>
                    <td>{{ $agrupamentos->nucleo->nucleo_nome }}</td>
                    <td>{{ $agrupamentos->descricao }}</td>
                  </tr>

              </tbody>
            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>

@endsection
{{-- @include('admin.agrupamentos.modal.delete') --}}
