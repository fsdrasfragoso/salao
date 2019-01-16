@extends('layout.app', ["current" => "funcionario"])

@section('body')

<div class="card border">
    <div class="card-body">
        <form action="/funcionario/{{$func->id}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nomeFuncionario">Nome do Funcionario</label>
                <input type="text" class="form-control" name="nome" value="{{$func->nome}}"
                       id="nomeFuncionaro" placeholder="Funcionario">
            </div>
            <div class="form-group">
                <label for="nomeFuncionario">CPF</label>
                <input type="text" class="form-control" name="cpf" value="{{$func->cpf}}"
                       id="nomeFuncionaro" placeholder="CPF">
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <a  href="\funcionario" type="cancel" class="btn btn-danger btn-sm">Cancel</a>
        </form>
    </div>
</div>

@endsection