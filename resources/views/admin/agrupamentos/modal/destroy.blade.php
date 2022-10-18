<div id="destroy{{ $agrupamento->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="Create-title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="my-modal-title">{{ $agrupamento->agrupamento_nome }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <h3>Tem a certeza que prentende eliminar o  {{ $agrupamento->agrupamento_nome }} </h3>

            </div>
            <div class="modal-footer">
                <form action="{{ route('agrupamentos.destroy',$agrupamento->id) }}" method="post">
                    @csrf
                    @method("DELETE")
                        <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                        <button type="reset" data-bs-dismiss="modal" class="btn btn-outline-secondary">Cancelar</button>

                </form>
            </div>
        </div>
    </div>
</div>
