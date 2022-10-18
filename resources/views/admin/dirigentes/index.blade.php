@extends('layout.app')

@section('conteudo')

<section class="section">

    {{--  <a class="btn btn-primary mb-3"  data-bs-toggle="modal" data-bs-target="#create">Novo Nucleo</a> --}}

    <a class="btn btn-primary mb-3"  href="{{ route('dirigentes.create') }}">Novo Dirigente</a>

    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Dirigente</h5>


            </form>

            <!-- Table with stripped rows -->
            <table id="example" class="table table-striped" style="width:100% ">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nome</th>
                  <th scope="col">Cargo</th>
                  <th scope="col">BI</th>

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
                        <a href="#" data-bs-toggle="modal" data-bs-target="#show{{ $nucleo->id }}" ><i class="fas fa-eye" style="color: green;"></i></a>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#delete{{ $nucleo->id }}"><i class="fas fa-trash" style="color: red;"></i></a>
                        <a href="{{ route('nucleos.edit', $nucleo->id) }} "><i class="fas fa-pen-to-square" ></i></a>
                    </td>
                </tr>

                  @include('admin.nucloes.modal.show')
                  @include('admin.nucloes.modal.delete')

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



