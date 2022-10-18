<div id="show{{ $cargo->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="my-modal-title">{{ $cargo->cargo }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <strong>Cargo</strong>: {{ $cargo->cargo }}<br>
                <strong>Descrição</strong>: {{ $cargo->descricao}}<br>
            </div>
            <div class="modal-footer">

               <button type="reset" data-bs-dismiss="modal" class="btn btn-outline-secondary">Sair</button>
            </div>
        </div>
    </div>
</div>
