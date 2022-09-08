@extends('layouts.tema.tema')

@section('titulo', 'cadastro de PDV')

@section('conteudo')

    <div class="container">
        <form action="{{ route('admin.pdv.salvar') }}" method="post">
            @include('admin.paginas.pdv.part.formulario')
            <button class="btn btn-success" type="submit">Cadastrar</button>
        </form>
    </div>

@endsection
