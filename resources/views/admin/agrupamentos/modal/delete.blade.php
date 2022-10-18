<div id="delete" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="show-title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        @if (!empty($agrupamento))
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="my-modal-title">{{ $agrupamento->agrumamento_nome }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h2>Eliminar {{ $agrupamento->agrupamento_nome }}</h2>
            </div>
            <div class="modal-footer">

                <form action="{{ route('agrupamentos.destroy', $agrupamento->id) }}" method="post">
                    @csrf
                    @method("DELETE")
                    <button type="reset" data-bs-dismiss="modal" class="btn btn-outline-secondary">Cancelar</button>
                    <button type="submit" data-bs-dismiss="modal" class="btn btn-outline-danger">Eliminar</button>
                </form>

            </div>
        </div>
        @endif

    </div>
</div>
