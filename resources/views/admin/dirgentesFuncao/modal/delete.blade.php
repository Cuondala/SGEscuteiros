
        <div id="delete{{ $cargo->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="show-title" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="my-modal-title">{{ $cargo->cargo }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <h4>Tem a certeza que prentende eliminar o cargo {{ $cargo->cargo }} </h4>
                    </div>
                    <div class="modal-footer">
                        <form action="{{ route('fucoes.destroy', $cargo->id) }}" method="post">
                            @csrf
                            @method("DELETE")

                            <button type="reset" data-bs-dismiss="modal" class="btn btn-outline-secondary">Cancelar</button>
                            <button type="submit" class="btn btn-outline-danger">Eliminar</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
