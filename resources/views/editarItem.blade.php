@extends('layout.app', ["current" => "Menu_Superior"])

@section('body')

<div class="card border">
    <div class="card-body">
        <form action="/CadastroMenu/{{$menu->id}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nomeCategoria">Nome da Categoria</label>
                <input type="text" class="form-control" name="item_nome" value="{{$menu->item_nome}}"
                       id="item_nome" placeholder="Menu_Superior">
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
             <a type="cancel" class="btn btn-danger btn-sm" href="/CadastroMenu">Cancel</a>
        </form>
    </div>
</div>

@endsection