<option value="">Agrupamento</option>
 @foreach ($agrupamentos as $agrupamento )
    <option value="{{ $agrupamento->id }}">{{ $agrupamento->agrupamento_nome }}</option>
@endforeac
