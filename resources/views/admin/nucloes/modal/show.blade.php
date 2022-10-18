

    <div id="show{{ $nucleo->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="show-title" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="my-modal-title">{{ $nucleo->nucleo_nome }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <strong>Núcleo</strong>: {{ $nucleo->nucleo_nome }}<br>
                    <strong>Região</strong>: {{ $nucleo->regiao->regiao_nome }}<br>
                    <strong>Religião</strong>: {{ $nucleo->religiao->implode('religiao_nome')}}<br>
                    <strong>Descrição</strong>: {{ $nucleo->descricao}}<br>


                </div>
                <div class="modal-footer">

                    <button type="reset" data-bs-dismiss="modal" class="btn btn-outline-secondary">Sair</button>
                </div>
            </div>
        </div>
    </div>



