@extends('layout.app', ["current" => "Menu"])

@section('body')
<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Cadastro do Menu Superior</h5>

@if(count($menu) > 0)
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome do Item</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
    @foreach($menu as $m)
                <tr>
                    <td>{{$m->id}}</td>
                    <td>{{$m->item_nome}}</td>
                    <td>
                        <a href="/CadastroMenu/editar/{{$m->id}}" class="btn btn-sm btn-primary">Editar</a>
                        <a href="/CadastroMenu/apagar_item/{{$m->id}}" class="btn btn-sm btn-danger">Apagar</a>
                    </td>
                </tr>
    @endforeach                
            </tbody>
        </table>
@endif        
    </div>
    <div class="card-footer">
        <a href="/CadastroMenu/novo_item" class="btn btn-sm btn-primary" role="button">Novo Item</a>
    </div>
</div>



@endsection