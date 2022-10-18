<div id="show{{ $agrupamento->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="Create-title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="my-modal-title">{{ $agrupamento->agrupamento_nome }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <strong>Agrupamento</strong>: {{ $agrupamento->agrupamento_nome }}<br>
                <strong>Descrição</strong>: {{ $agrupamento->descricao}}<br>
                <strong>Nucleo</strong>: {{ $agrupamento->nucleo->nucleo_nome }}

            </div>
            <div class="modal-footer">
                <button type="reset" data-bs-dismiss="modal" class="btn btn-outline-secondary">Sair</button>
            </div>
        </div>
    </div>
</div>
