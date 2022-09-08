@extends('layouts.tema.tema')

@section('titulo', 'Editar o PDV')

@section('conteudo')

    <div class="container">
        <form action="{{ route('admin.pdv.atualizar', $dados->id) }}" method="post">
            @include('admin.paginas.pdv.part.formulario')
            @method('put')
            <button class="btn btn-success" type="submit">Atualizar</button>
        </form>
    </div>

@endsection
