@extends('layouts.tema.tema')

@section('titulo', 'abrir Caixa')

@section('conteudo')

    <div class="container">
        <form action="{{ route('admin.caixa.abrir') }}" method="post">
            <br>
            @csrf
            <select name="nome" class="form-select">
                @foreach ($dados as $dado)
                    <option {{ $dado->id }}>{{ $dado->nome }}</option>
                @endforeach
              </select>
            <label class="form-label">Valor</label>
            <input class="form-control" type="text" name="valor" placeholder="Valor" autofocus required>
            <br>
            <button class="btn btn-success" type="submit">Cadastrar</button>
        </form>
    </div>

@endsection
