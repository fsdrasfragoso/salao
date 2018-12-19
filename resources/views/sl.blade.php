@extends('layout.app', ["current" => "sl"])

@section('body')
<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Cadastro de Categorias</h5>

@if(count($sl) > 0)
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome da Categoria</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
    @foreach($sl as $cat)
                <tr>
                    <td>{{$cat->id}}</td>
                    <td>{{$cat->nome}}</td>
                    <td>
                        <a href="/sl/editar/{{$cat->id}}" class="btn btn-sm btn-primary">Editar</a>
                        <a href="/sl/apagar/{{$cat->id}}" class="btn btn-sm btn-danger">Apagar</a>
                    </td>
                </tr>
    @endforeach                
            </tbody>
        </table>
@endif        
    </div>
    <div class="card-footer">
        <a href="/sl/novo" class="btn btn-sm btn-primary" role="button">Novo nome para sua loja</a>
    </div>
</div>



@endsection