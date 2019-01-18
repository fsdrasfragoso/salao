@extends('layout.app', ["current" => "funcionario"])

@section('body')

<div class="card border">
    <div class="card-body">
        <form method="POST" id="fomFuncionario">
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
            <button type="submit" class="btn btn-primary btn-sm" onclick="salvar();">Salvar</button>
            <a href="/funcionario" type="cancel" class="btn btn-danger btn-sm">Cancel</a>
        </form>
    </div>
</div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
<script type="text/javascript">
    $("#cpf").mask("000.000.000-00");
    
     $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
        }
    });
    
    function validarCPF(cpf) {	
	cpf = cpf.replace(/[^\d]+/g,'');	
	if(cpf == '') return false;	
	// Elimina CPFs invalidos conhecidos	
	if (cpf.length != 11 || 
		cpf == "00000000000" || 
		cpf == "11111111111" || 
		cpf == "22222222222" || 
		cpf == "33333333333" || 
		cpf == "44444444444" || 
		cpf == "55555555555" || 
		cpf == "66666666666" || 
		cpf == "77777777777" || 
		cpf == "88888888888" || 
		cpf == "99999999999")
			return false;		
	// Valida 1o digito	
	add = 0;	
	for (i=0; i < 9; i ++)		
		add += parseInt(cpf.charAt(i)) * (10 - i);	
		rev = 11 - (add % 11);	
		if (rev == 10 || rev == 11)		
			rev = 0;	
		if (rev != parseInt(cpf.charAt(9)))		
			return false;		
	// Valida 2o digito	
	add = 0;	
	for (i = 0; i < 10; i ++)		
		add += parseInt(cpf.charAt(i)) * (11 - i);	
	rev = 11 - (add % 11);	
	if (rev == 10 || rev == 11)	
		rev = 0;	
	if (rev != parseInt(cpf.charAt(10)))
		return false;		
	return true;   
        
         function criarProduto() {
        func = { 
            nome: $("#nome").val(), 
            cpf: $("#cpf").val(),   
            
        };
        $.post("/api/funcionario", func, function(data) {
            console.log('entrou aqui');
        });
              
         }
     function salvar(){
         if (validarCPF($('#cpf').val())== true)
             console.log('salvar');
             //criarProduto();
        else
             alert('CPF Invalido');    
       
     }
      
  
}

 </script>
@endsection