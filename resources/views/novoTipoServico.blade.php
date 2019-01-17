@extends('layout.app', ["current" => "Tipo_Servico"])

@section('body')

<div class="card border">
    <div class="card-body">
        <form action="/TipoServico" method="POST">
            @csrf
            <div class="form-group">
                <label for="nomeCategoria">Nome Tipo do Serviço</label>
                <input type="text" class="form-control" name="nome" 
                       id="nomeCategoria" placeholder="Nome">
            </div>
            <div class="form-group">
                <label for="nomeCategoria">Descrição Tipo do Serviço</label>
                <input type="text" class="form-control" name="descricao" 
                       id="nomeCategoria" placeholder="Descriçao">
            </div>
            <div class="form-group">
                <label for="nomeCategoria">Preço Tipo do Serviço</label>
                <input type="text" class="form-control" name="preco" 
                       id="nomeCategoria" placeholder="Preço">
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <a href="/TipoServico" type="cancel" class="btn btn-danger btn-sm">Cancel</a>
        </form>
    </div>
</div>

@endsection