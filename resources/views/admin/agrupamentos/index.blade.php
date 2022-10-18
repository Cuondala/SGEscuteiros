@extends('layout.app')

@section('conteudo')

<section class="section">

    {{--  <a class="btn btn-primary mb-3"  data-bs-toggle="modal" data-bs-target="#create">Novo Nucleo</a> --}}

    <a class="btn btn-primary mb-3"  href="{{ route('agrupamentos.create') }}">Novo Agrupamento</a>

    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Agrupamento</h5>


            </form>

            <!-- Table with stripped rows -->
            <table id="example" class="table table-striped" style="width:100% ">
              <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Agrupamento</th>
                  <th scope="col">Núcleo</th>
                  <th scope="col">Acção</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($agrupamentos as $agrupamento )
                <tr>
                    <th scope="row">{{ $agrupamento->id }}</th>
                    <td>{{ $agrupamento->agrupamento_nome }}</td>
                    <td>{{ $agrupamento->nucleo->nucleo_nome }}</td>



                    <td>
                        <a href=" {{ route('agrupamentos.show', $agrupamento->id) }}" ><i class="fas fa-eye" style="color: green;"></i></a>
                        <a href=" " data-bs-toggle="modal" data-bs-target="#delete"><i class="fas fa-trash" style="color: red;"></i></a>
                        <a href="{{ route('agrupamentos.edit',$agrupamento->id) }} "><i class="fas fa-pen-to-square" ></i></a>
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
@include('admin.agrupamentos.modal.delete')
