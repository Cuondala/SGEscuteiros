@extends('layout.app')

@section('conteudo')

<section class="section">

    <a class="btn btn-primary mb-3"  href="{{ route('dirigentes.create') }}">Novo Dirigente</a>

    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Dirigentes</h5>


            </form>

            <!-- Table with stripped rows -->
            <table id="example" class="table table-striped" style="width:100% ">
              <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Nome</th>
                  <th scope="col">Cargo</th>
                  <th scope="col">Acção</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($dirigentes as $dirigente)
                <tr>
                    <th scope="row">{{ $dirigente->id }}</th>
                    <td>{{ $dirigente->dirigente_nome }}</td>
                    <td>{{ $dirigente->dirigenteFuncao->cargo }}</td>

                    <td>
                        <a href=" {{ route('dirigentes.show', $dirigente->id) }}" ><i class="fas fa-eye" style="color: green;"></i></a>
                        <a href=" " data-bs-toggle="modal" data-bs-target="#delete"><i class="fas fa-trash" style="color: red;"></i></a>
                        <a href="{{ route('dirigentes.edit',$dirigente->id) }} "><i class="fas fa-pen-to-square" ></i></a>
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
@include('admin.dirigentes.modal.delete')
