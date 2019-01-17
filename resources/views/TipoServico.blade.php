@extends('layout.app', ["current" => "Tipo_Servico"])

@section('body')
<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Cadastro Tipo Serviço</h5>

@if(count($tipo) > 0)
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome da Categoria</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
    @foreach($tipo as $t)
                <tr>
                    <td>{{$t->id}}</td>
                    <td>{{$t->nome}}</td>
                    <td>{{$t->descricao}}</td>
                    <td>{{$t->preco}}</td>
                    <td>
                        <a href="/TipoServico/editar/{{$t->id}}" class="btn btn-sm btn-primary">Editar</a>
                        <a href="/TipoServico/apagar/{{$t->id}}" class="btn btn-sm btn-danger">Apagar</a>
                    </td>
                </tr>
    @endforeach                
            </tbody>
        </table>
@endif        
    </div>
    <div class="card-footer">
        <a href="/TipoServico/novo" class="btn btn-sm btn-primary" role="button">Novo Tipo Serviço</a>
    </div>
</div>



@endsection