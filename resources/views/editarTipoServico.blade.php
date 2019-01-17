@extends('layout.app', ["current" => "categorias"])

@section('body')

<div class="card border">
    <div class="card-body">
        <form action="/TipoServico/{{$tipo->id}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nomeTipoServico">Nome Tipo do Serviço</label>
                <input type="text" class="form-control" name="nome" value="{{$tipo->nome}}"
                       id="nomeTipoServico" placeholder="nome">
            </div>
            <div class="form-group">
                <label for="nomeTipoServico">Descrição Tipo do Serviço</label>
                <input type="text" class="form-control" name="descricao" value="{{$tipo->descricao}}"
                       id="nomeTipoServico" placeholder=" Descrição Tipo do Serviço">
            </div>
            <div class="form-group">
                <label for="nomeTipoServico">Preço Tipo do Serviço</label>
                <input type="text" class="form-control" name="preco" value="{{$tipo->preco}}"
                       id="nomeTipoServico" placeholder="Preço Tipo do Serviço">
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <a href="/TipoServico" type="cancel" class="btn btn-danger btn-sm">Cancel</a>
        </form>
    </div>
</div>

@endsection