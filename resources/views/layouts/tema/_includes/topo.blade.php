<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema PDV @yield('titulo')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <div class="container">
    <header>
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <a href="#" class="navbar-brand">Admin</a>
                <a href="{{ route('admin.pdv.index') }}" class="navbar-brand">Pdvs</a>
                <a href="{{ route('admin.caixa.index') }}" class="navbar-brand">Caixa</a>
                <a href="#" class="navbar-brand">Perfil</a>
                <a href="#" class="navbar-brand">Permissão</a>
                <a href="#" class="navbar-brand">Usuário</a>
            </div>
        </nav>
    </header>
  </div>
  <body>
