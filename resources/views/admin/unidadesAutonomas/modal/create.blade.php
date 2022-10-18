<form action="{{ route('ua.store') }}" method="post">
    @csrf

    <div id="create" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="my-modal-title">Unidade Autonoma</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text"
                               name="unidade_autonoma_nome"
                               id=""
                               placeholder="Unidade Autonoma"
                               class=" unidade_autonoma_nome form-control"
                        >
                    </div>

                    <div class="form-group mt-3">
                       <select name="nucleo_id" id="nucleo"  class="nucleo_id form-select">
                        <option value="">Nucleo</option>


                       </select>
                    </div>

                    <div class="form-group mt-3">
                        <select name="seccao_id" id="secao" class="seccao_id form-select">
                             <option value="">Seccao</option>
                        </select>
                     </div>

                    <div class="form-group mt-3">
                       <textarea name="descricao" id="" cols="10" rows="5" placeholder="Descrição" class="descricao form-control"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                   <button type="submit" onclick="cadastrar()"  class=" btn btn-outline-primary">Registrar</button>
                   <button type="reset" data-bs-dismiss="modal" class="btn btn-outline-secondary">Cancelar</button>
                </div>
            </div>
        </div>
    </div>


</form>
