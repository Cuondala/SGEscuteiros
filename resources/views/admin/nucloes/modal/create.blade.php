<form action="" method="post">
    @csrf

    <div id="create" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="create-title" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="my-modal-title">Novo Núcleo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group mb-4">
                        <select name="regiao_id" id="regiao" class="form-select">
                            <option value="">Regiao</option>

                        </select>
                    </div>
                    <div class="form-group mb-4">
                        <select name="" id="" class="form-select"></select>
                    </div>
                    <div class="form-group mb-4">
                        <input type="text" name="" id="" class="form-control" placeholder="Núcleo">
                    </div>

                    <div class="form-group">
                        <textarea name="" id="" cols="20" rows="10" class="form-control" placeholder="descricao"></textarea>
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
