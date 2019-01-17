@extends('layout.app', ["current" => "funcionario"])

@section('body')

<div class="card border">
    <div class="card-body">
        <form action="/funcionario" method="POST">
            @csrf
            <div class="form-group">
                <label for="nomeCategoria">Nome do Funcionario</label>
                <input type="text" class="form-control" name="nome" 
                       id="nome" placeholder="Nome Funcionario">
            </div>
            <div class="form-group">
                <label for="nomeCategoria">CPF do Funcionario</label>
                <input id="cpf" type="text" class="form-control cpf-mask" placeholder="Ex.: 000.000.000-00" name="cpf">
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <a href="/funcionario" type="cancel" class="btn btn-danger btn-sm">Cancel</a>
        </form>
    </div>
</div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
<script type="text/javascript">
    $("#cpf").mask("000.000.000-00");
    
 </script>
@endsection