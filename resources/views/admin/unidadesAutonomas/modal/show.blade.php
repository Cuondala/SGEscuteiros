<div id="show{{ $ua->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="show-title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="my-modal-title">{{ $ua->unidade_autonoma_nome }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <strong>Núcleo</strong>: {{ $ua->unidade_autonoma_nome }}<br>
                <strong>Região</strong>: {{ $ua->nucleo_nome }}<br>
                <strong>Religião</strong>: {{ $ua->seccao_nome}}<br>
                <strong>Descrição</strong>: {{ $ua->descricao}}<br>


            </div>
            <div class="modal-footer">

                <button type="reset" data-bs-dismiss="modal" class="btn btn-outline-secondary">Sair</button>
            </div>
        </div>
    </div>
</div>
