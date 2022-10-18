@extends('layout.app')

@section('conteudo')

<section class="section">

    {{--  <a class="btn btn-primary mb-3"  data-bs-toggle="modal" data-bs-target="#create">Novo Nucleo</a> --}}

    <a class="btn btn-primary mb-3"  href="{{ route('escuteiros.index') }}">Voltar para a listagem</a>

    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">{{ $escuteiros->escuteiro_nome }}</h5>



            </form>

            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Nome</th>
                  <th scope="col">BI</th>
                  <th scope="col">Endereço</th>
                  <th scope="col">Data de Nascimento</th>
                  <th scope="col">Telefone</tr>
                  <th scope="col">Email</th>
                  {{-- <th scope="col">Parentes</th> --}}
                  <th scope="col">Patrulha</th>
                  <th scope="col">Estado</th>
                  <th scope="col">Descrição</th>

                </tr>
              </thead>
              <tbody>

                <th scope="row">{{ $escuteiros->id }}</th>
                    <td>{{ $escuteiros->escuteiro_nome }}</td>
                    <td>{{ $escuteiros->bi }}</td>
                    <td>{{ $escuteiros->endereco }}</td>
                    <td>{{ $escuteiros->data_nascimento }}</td>
                    <td>{{ $escuteiros->telefone->numero_telefone }}</td>
                    <td>{{ $escuteiros->email }}</td>
                    {{-- <td>{{ $escuteiros->parente->responsavel_1}}</td>
                    <td>{{ $escuteiros->parente->responsavel_2}}</td> --}}
                    <td>{{ $escuteiros->patrulha->patrulha_nome}}</td>
                    <td>{{ $escuteiros->estado }}</td>
                    <td>{{ $escuteiros->descricao }}</td>
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
