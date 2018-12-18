@extends('layout.app', ["current" => "produtos" ])

@section('body')
<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Cadastro de Produtos</h5>

@if(count($cats) > 0)
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome do Produto</th>
                    <th>Estoque</th>
                    <th>Preço</th>
                    <th>Classificação</th>
                    <th>Imagem</th>
                    <th>Categoria</th>
                </tr>
            </thead>
            <tbody>
    @foreach($cats as $cat)
                <tr>
                    <td>{{$cat->id}}</td>
                    <td>{{$cat->nome}}</td>
                    <td>
                        <a href="/categorias/editar/{{$cat->id}}" class="btn btn-sm btn-primary">Editar</a>
                        <a href="/categorias/apagar/{{$cat->id}}" class="btn btn-sm btn-danger">Apagar</a>
                    </td>
                </tr>
    @endforeach                
            </tbody>
        </table>
@endif        
    </div>
    <div class="card-footer">
        <a href="/categorias/novo" class="btn btn-sm btn-primary" role="button">Nova categoria</a>
    </div>
</div>



@endsection