@extends('layout.app', ["current" => "funcionario"])

@section('body')
<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Cadastro de Funcionarios</h5>

@if(count($func) > 0)
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome da Categoria</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
    @foreach($func as $f)
                <tr>
                    <td>{{$f->id}}</td>
                    <td>{{$f->nome}}</td>
                    <td>{{$f->cpf}}</td>
                    <td>
                        <a href="/funcionario/editar/{{$f->id}}" class="btn btn-sm btn-primary">Editar</a>
                        <a href="/funcionario/apagar/{{$f->id}}" class="btn btn-sm btn-danger">Apagar</a>
                    </td>
                </tr>
    @endforeach                
            </tbody>
        </table>
@endif        
    </div>
    <div class="card-footer">
        <a href="/funcionario/novo" class="btn btn-sm btn-primary" role="button">Nova Funcionario</a>
    </div>
</div>



@endsection