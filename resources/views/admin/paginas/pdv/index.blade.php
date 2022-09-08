@extends('layouts.tema.tema')

@section('titulo', 'Lista de PDV')

@section('conteudo')

<div class="container">
    <br>
    <table class="table table-dark">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($dados as $dado)
            <tr>
                <td>{{ $dado->nome }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('admin.pdv.mostrar', $dado->id) }}">Detalhes</a>
                </td>
            </tr>
            @empty
                Não possui nenhum PDV cadastro !
            @endforelse
        </tbody>
    </table>
    <a href="{{ route('admin.pdv.criar') }}" class="btn btn-primary">Criar Pdv</a>
</div>

@endsection
