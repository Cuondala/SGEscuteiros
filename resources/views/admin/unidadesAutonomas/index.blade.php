@extends('layout.app')

@section('conteudo')

<section class="section">

    {{--  <a class="btn btn-primary mb-3"  data-bs-toggle="modal" data-bs-target="#create">Novo Nucleo</a> --}}

    <a class="btn btn-primary mb-3"  href="{{ route('ua.create') }}" >Nova Unid.Autonoma</a>

    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Unidades Autonomas</h5>


            </form>

            <!-- Table with stripped rows -->
            <table id="example" class="table table-striped" style="width:100% ">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Unid.Autonoma</th>
                  <th scope="col">Núcleo</th>
                  <th scope="col">Seccao</th>
                  <th scope="col">Acção</th>
                </tr>
              </thead>
              <tbody>

                @foreach ($uas as $ua )
                    <tr>
                        <th scope="row">{{ $ua->id }}</th>
                        <td>{{ $ua->unidade_autonoma_nome }}</td>
                        <td>{{$ua->nucleo_nome}}</td>
                        <td>{{$ua->seccao_nome}}</td>


                        <td>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#show{{ $ua->id }}" ><i class="fas fa-eye" style="color: green;"></i></a>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#delete{{ $ua->id }}"><i class="fas fa-trash" style="color: red;"></i></a>
                            <a href="{{ route('ua.edit', $ua->id) }} "><i class="fas fa-pen-to-square" ></i></a>
                        </td>
                    </tr>

                    @include('admin.unidadesAutonomas.modal.show')
                    @include('admin.unidadesAutonomas.modal.delete')



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


