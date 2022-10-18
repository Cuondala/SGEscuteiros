<div class="form-group row mb-4">
    <div class="col-md-4">
        <select name="regiao_id" id="" class="form-select">
            <option value="">Região</option>
            @foreach ($regiaos as $regiao )
                <option value="{{ $regiao->id }}">
                    {{ $regiao->regiao_nome }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="col-md-4">
        <select name="religiao_id[]" id="" class="form-select">
            <option value="">Religião</option>
            @foreach ($religiaos as $religiao )

                <option value="{{ $religiao->id }}">
                    {{ $religiao->religiao_nome }}
                </option>

            @endforeach
        </select>
    </div>

    <div class="col-md-4">
        <input type="text"
               name="nucleo_nome"
               id="" class="form-control"
               placeholder="Núcleo"
               value="{{ $nucleos->nucleo_nome ??  old('nucleo_nome') }}"
        >
    </div>
</div>


<div class="form-group mb-4">
    <div class="col-md-12">
        <textarea name="descricao"
                  id=""
                  cols="30"
                  rows="10"
                  class="form-control"
                  placeholder="Descrição"
                  value="{{ $nucleos->descricao ?? old('descricao') }}">
        </textarea>
    </div>


</div>


<div class="form-group">
    <button type="submit" class="btn btn-outline-primary">Registrar</button>
</div>
