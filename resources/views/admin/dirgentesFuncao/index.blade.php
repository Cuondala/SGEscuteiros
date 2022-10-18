@extends('layout.app')

@section('conteudo')

    <section class="section">

        {{--  <a class="btn btn-primary mb-3"  data-bs-toggle="modal" data-bs-target="#create">Novo Nucleo</a> --}}

        <a class="btn btn-primary mb-3"  href="#" data-bs-toggle="modal" data-bs-target="#create">Novo Cargo</a>

        <div class="row">
        <div class="col-lg-12">

            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Cargo do Dirigente</h5>


                </form>

                <!-- Table with stripped rows -->
                <table id="example" class="table table-striped" style="width:100% ">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Cargo</th>
                    <th scope="col">Acção</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($cargos as $cargo )

                    <tr>
                        <td>{{ $cargo->id }}</td>
                        <td>{{ $cargo->cargo }}</td>
                        <td>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#show{{ $cargo->id }}" ><i class="fas fa-eye" style="color: green;"></i></a>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#delete{{ $cargo->id }}"><i class="fas fa-trash" style="color: red;"></i></a>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#edit{{ $cargo->id }}"><i class="fas fa-pen-to-square" ></i></a>
                        </td>
                    </tr>
                        @include('admin.dirgentesFuncao.modal.show')
                        @include('admin.dirgentesFuncao.modal.edit')
                        @include('admin.dirgentesFuncao.modal.delete')
                    @endforeach
                </tbody>
                </table>
                <!-- End Table with stripped rows -->

            </div>
            </div>

        </div>
        </div>
    </section>
    @include('admin.dirgentesFuncao.modal.create')
@endsection




