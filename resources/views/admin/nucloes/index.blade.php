@extends('layout.app')

@section('conteudo')

<section class="section">

    {{--  <a class="btn btn-primary mb-3"  data-bs-toggle="modal" data-bs-target="#create">Novo Nucleo</a> --}}

    <a class="btn btn-primary mb-3"  href="{{ route('nucleos.create') }}">Novo Nucleo</a>

    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Nucleo</h5>


            </form>

            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Núcleo</th>
                  <th scope="col">Região</th>
                  <th scope="col">Religão</th>
                  <th scope="col">Acção</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($nucleos as $nucleo )
                <tr>
                    <th scope="row">{{ $nucleo->id }}</th>
                    <td>{{ $nucleo->nucleo_nome }}</td>
                    <td>{{$nucleo->regiao->regiao_nome}}</td>
                    <td>{{ $nucleo->religiao->implode('religiao_nome')}}</td>



                    <td>
                        <a href=" {{ route('nucleos.show', $nucleo->id) }}"><i class="fas fa-eye" style="color: green;"></i></a>
                        <a href=" "><i class="fas fa-trash" style="color: red;"></i></a>
                        <a href=" "><i class="fas fa-pen-to-square" ></i></a>
                    </td>
                  </tr>
                @endforeach


              </tbody>
            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>

@endsection

@include('admin.nucloes.modal.show')

