@extends('layout.app')

@section('conteudo')

<section class="section">

    {{--  <a class="btn btn-primary mb-3"  data-bs-toggle="modal" data-bs-target="#create">Novo Nucleo</a> --}}

    <a class="btn btn-primary mb-3"  href="{{ route('dirigentes.index') }}">Voltar para a listagem</a>

    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">{{ $dirigentes->dirigente_nome }}</h5>



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
                  <th scope="col">Telefone</th>
                  <th scope="col">Email</th>
                  <th scope="col">Cargo</th>
                  <th scope="col">Agrupamento</th>
                  {{-- <th scope="col">Unidade Autónoma</th>
                  <th scope="col">Secção</th>
                  <th scope="col">Unidade</th>
                  <th scope="col">Patrulha</th> --}}
                  <th scope="col">Descrição</th>

                </tr>
              </thead>
              <tbody>

                <th scope="row">{{ $dirigentes->id }}</th>
                    <td>{{ $dirigentes->dirigente_nome }}</td>
                    <td>{{ $dirigentes->bi }}</td>
                    <td>{{ $dirigentes->endereco }}</td>
                    <td>{{ $dirigentes->data_nascimento }}</td>
                    <td>{{ $dirigentes->telefone->numero_telefone }}</td>
                    <td>{{ $dirigentes->email }}</td>
                    <td>{{ $dirigentes->dirigenteFuncao->cargo}}</td>
                    <td>{{ $dirigentes->agrupamento->agrupamento_nome }}</td>
                    {{-- <td>{{ $dirigentes->unidadeAutonoma->unidade_autonoma_nome}}</td>
                    <td>{{ $dirigentes->seccao->seccao_nome }}</td>
                    <td>{{ $dirigentes->unidade->unidade_nome }}</td>
                    <td>{{ $dirigentes->patrulha->patrulha_nome }}</td> --}}
                    <td>{{ $dirigentes->descricao }}</td>
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
