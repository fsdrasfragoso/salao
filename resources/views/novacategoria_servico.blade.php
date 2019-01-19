@extends('layout.app', ["current" => "categorias"])

@section('body')

<div class="card border">
    <div class="card-body">
        <form action="/categorias_servicos" method="POST">
            @csrf
            <div class="form-group">
                <label for="nomeCategoria">Nome da Categoria</label>
         <input type="text" class="form-control" name="nome" id="nomeCategoria" placeholder="Categoria">
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <a  href="/categorias_servicos"type="cancel" class="btn btn-danger btn-sm">Cancel</a>
        </form>
    </div>
</div>

@endsection