<form action="{{ route('fucoes.update', $cargo->id) }}" method="post">
    @csrf
    @method('PUT')

    <div id="edit{{ $cargo->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="my-modal-title">{{ $cargo->id }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" name="cargo" id="" placeholder="Cargo" class="form-control" value={{ $cargo->cargo }}>
                    </div>

                    <div class="form-group mt-2">
                       <textarea name="descricao" id="" cols="10" rows="5" placeholder="Descrição" class="form-control" value={{ $cargo->descricao }}></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                   <button type="submit" class="btn btn-outline-primary">Registrar</button>
                   <button type="reset" data-bs-dismiss="modal" class="btn btn-outline-secondary">Cancelar</button>
                </div>
            </div>
        </div>
    </div>


</form>
