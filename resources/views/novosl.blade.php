@extends('layout.app', ["current" => "sl"])

@section('body')

<div class="card border">
    <div class="card-body">
        <form action="/sl" method="POST">
            @csrf
            <div class="form-group">
                <label for="nomeCategoria">Nome da Loja</label>
                <input type="text" class="form-control" name="nome" 
                       id="nome" placeholder="Categoria">
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sm">Cancel</button>
        </form>
    </div>
</div>

@endsection