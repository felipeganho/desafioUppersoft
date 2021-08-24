@extends('layout.principal')

@section('conteudo')
    <h1>Editar Pessoa</h1>
    <form action="{{ route('editar', $pessoa->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method("PUT")
        <div class="form-group">
            <label>Nome</label>
            <input name="nome" class="form-control" value="{{ $pessoa->nome }}">
        </div>
        <div class="form-group">
            <label>CPF</label>
            <input name="cpf" id="cpf" class="form-control" value="{{ $pessoa->cpf }}">
        </div>
        <div class="form-group">
            <label>Data de Nascimento</label>
            <input type="date" name="dataNascimento" class="form-control" value="{{ $pessoa->dataNascimento }}">
        </div>
        <div class="form-group">
            <label>E-mail</label>
            <input type="email" name="email" class="form-control" value="{{ $pessoa->email }}">
        </div>
        <div class="form-group">
            <label>Telefone</label>
            <input name="telefone" id="telefone" class="form-control" value="{{ $pessoa->telefone }}">
        </div>
        <div class="form-group">
            <label>Logradouro</label>
            <input name="logradouro" class="form-control" value="{{ $pessoa->logradouro }}">
        </div>
        <div class="form-group">
            <label>Estado</label>
            <select class="form-control" id="estado" name="estado" required="">
                <option>{{ $pessoa->estado }}</option>
            </select>
        </div>
        <div class="form-group">
            <label>Cidade</label>
            <select class="form-control" id="cidade" name="cidade" required="">
                <option>{{ $pessoa->cidade }}</option>
            </select>
        </div>
        <button type="submit" class="btn btn-info btn-block">Atualizar</button>
        <a type="button" class="btn btn-danger btn-block" href="{{ route('excluir', $pessoa->id) }}"> Excluir</a>
    </form>        
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>

<script>
    $(document).ready(function($){
        $('#cpf').mask('000.000.000-00');
        $('#telefone').mask('(00) 00000-0000');

        $.getJSON('https://servicodados.ibge.gov.br/api/v1/localidades/estados/', {id: 10, }, function (json) {
            var options = '<option value="">Selecione seu estado</option>';
            for (var i = 0; i < json.length; i++) {
                options += '<option data-id="' + json[i].id + '" value="' + json[i].nome + '" >' + json[i].nome + '</option>';
            }
            $("select[id='estado']").append(options);
        });

        $("select[name='estado']").change(function () {
            if ($(this).val()) {
                $.getJSON('https://servicodados.ibge.gov.br/api/v1/localidades/estados/'+$(this).find("option:selected").attr('data-id')+'/municipios', {id: $(this).find("option:selected").attr('data-id')}, function (json) {
                    var options = '<option value="">Cidade</option>';
                    for (var i = 0; i < json.length; i++) {
                        options += '<option value="' + json[i].nome + '" >' + json[i].nome + '</option>';
                    }
                    $("select[name='cidade']").html(options);
                });
            } else {
                $("select[name='cidade']").html('<option value=""></option>');
            }
        });
    });
</script>