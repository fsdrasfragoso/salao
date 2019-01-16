@extends('layout.app', ["current" => "funcionario"])

@section('body')

<div class="card border">
    <div class="card-body">
        <form action="/funcionario" method="POST">
            @csrf
            <div class="form-group">
                <label for="nomeCategoria">Nome do Funcionario</label>
                <input type="text" class="form-control" name="nome" 
                       id="nomeCategoria" placeholder="Nome Funcionario">
            </div>
            <div class="form-group">
                <label for="nomeCategoria">CPF do Funcionario</label>
                <input type="text" class="form-control cpf-mask"  name="cpf" 
                       id="cpf" placeholder="Ex.: 000.000.000-00" onclick="TestarCPF();" >
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <a href="/funcionario" type="cancel" class="btn btn-danger btn-sm">Cancel</a>
        </form>
    </div>
</div>

<script>
function TestaCPF() {
    var strCPF = $("#cpf").val()
    var Soma;
    var Resto;
    Soma = 0;
  if (strCPF == "00000000000"){
      alert('CPF Invalido');
      return false;
  } 
     
  for (i=1; i<=9; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (11 - i);
  Resto = (Soma * 10) % 11;
   
    if ((Resto == 10) || (Resto == 11))  Resto = 0;
    if (Resto != parseInt(strCPF.substring(9, 10)) ){
         alert('CPF Invalido');  
         return false;
    } 
   
  Soma = 0;
    for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (12 - i);
    Resto = (Soma * 10) % 11;
   
    if ((Resto == 10) || (Resto == 11))  Resto = 0;
    if (Resto != parseInt(strCPF.substring(10, 11) ) ){
        alert('CPF Invalido');
        return false;
    }
    
    return true;
}
//var strCPF = "12345678909";

</script>
@endsection