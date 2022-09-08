@csrf
<div class="mb-3">
    <br>
    <label class="form-label">Nome:</label>
    <input class="form-control" type="text" name="nome" placeholder="Nome:" autofocus value="{{ $dados->nome ?? old('nome') }}" required>
    <br>
    <label class="form-label">Descrição:</label>
    <input class="form-control" type="text" name="descricao" placeholder="Descrição:" value="{{ $dados->descricao ?? old('descricao') }}">
</div>
