@extends('layout.app', ["current" => "Preencher Ficha Tecnica do Produto"])

@section('body')

<div class="card border">
    <div class="card-body">
       
       
        <form action="/alterarFicha/{{$ficha->id}}" method="POST">
            @csrf
            <input type="hidden" name="produto_id" value="{{$ficha->produto_id}}">
            <div class="form-group">
                <label for="nomeCategoria">DESCREVA AS CARACTERISTICAS DO PRODUTO:</label>
         <textarea class="form-control" id="summary-ckeditor" name="caracteristicas"  rows="3"></textarea>
            </div>
            <div class="form-group">
            <label for="precoProduto" class="control-label">INFORME A MARCA DO PRODUTO:</label>
                 <div class="input-group">
                        <input type="text" class="form-control" id="marca" placeholder="Marca" name="marca" value="{{$ficha->marca}}">
                 </div>     
            </div>
            <div class="form-group">
            <label for="precoProduto" class="control-label">INFORME O MODELO DO PRODUTO:</label>
                 <div class="input-group">
                        <input type="text" class="form-control" id="modelo" placeholder="Modelo" name="modelo" value="{{$ficha->modelo}}">
                 </div>     
            </div>
            
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <a type="cancel" class="btn btn-danger btn-sm" href="/produtos">Cancel</a>
        </form>
    
    </div>
</div>

<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'summary-ckeditor' );
</script>

@endsection