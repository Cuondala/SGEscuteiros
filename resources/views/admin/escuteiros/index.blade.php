@extends('layout.app')

@section('conteudo')

<section class="section">

    <a class="btn btn-primary mb-3"  href="{{ route('escuteiros.create') }}">Novo Escuteiro</a>

    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Escuteiros</h5>


            </form>

            <!-- Table with stripped rows -->
            <table id="example" class="table table-striped" style="width:100% ">
              <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Nome</th>
                  <th scope="col">Patrulha</th>
                  <th scope="col">Acção</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($escuteiros as $escuteiro)
                <tr>
                    <th scope="row">{{ $escuteiro->id }}</th>
                    <td>{{ $escuteiro->escuteiro_nome }}</td>
                    <td>{{ $escuteiro->patrulha->patrulha_nome}}</td>

                    <td>
                        <a href=" {{ route('escuteiros.show', $escuteiro->id) }}" ><i class="fas fa-eye" style="color: green;"></i></a>
                        <a href=" " data-bs-toggle="modal" data-bs-target="#delete"><i class="fas fa-trash" style="color: red;"></i></a>
                        <a href="{{ route('escuteiros.edit',$escuteiro->id) }} "><i class="fas fa-pen-to-square" ></i></a>
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
@include('admin.escuteiros.modal.delete')
