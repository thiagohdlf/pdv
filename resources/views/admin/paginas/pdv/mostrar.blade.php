@extends('layouts.tema.tema')

@section('titulo', 'Detalhes do PDV')

@section('conteudo')

<div class="container">
    <br>
    <table class="table table-dark">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $dados->nome }}</td>
                <td>{{ $dados->descricao }}</td>
                <div class="col-md-6">
                    <td class="btn-group">
                        <a class="btn btn-warning" href="{{ route('admin.pdv.editar', $dados->id) }}">Editar</a>
                        <form action="{{ route('admin.pdv.deletar', $dados->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" type="submit" onclick="return confirm('Tem certeza que deseja apagar esse Pdv ?')">Apagar</button>
                        </form>
                    </td>
                </div>
            </tr>
        </tbody>
    </table>
</div>

@endsection
