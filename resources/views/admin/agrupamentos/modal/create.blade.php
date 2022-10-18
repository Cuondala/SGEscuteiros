<form action="{{ route("agrupamentos.store") }}" method="post" enctype="multipart/form-data">
    @csrf

        <div id="create" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="Create-title" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="my-modal-title">Novo Agrupamento</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <select name="nucleo_id" id="nucleo" class="form-select">
                                <option value="" >Nucleos</option>

                            </select>
                        </div>

                        <div class="form-group mt-4">
                            <input type="text" name="agrupamento_nome" id="" class="form-control" placeholder="Agrupamento">
                        </div>

                        <div class="form-group  mt-4">
                            <textarea name="descricao" id="" cols="10" rows="5" class="form-control" placeholder="Descrição"></textarea>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit"  class="btn btn-outline-primary">Registrar</button>
                        <button type="reset" data-bs-dismiss="modal" class="btn btn-outline-secondary">Cancelar</button>
                    </div>
                </div>
            </div>
        </div>

</form>
