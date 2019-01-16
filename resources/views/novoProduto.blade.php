@extends('layout.app', ["current" => "Produtos"])

@section('body')
<?php 
        use App\Categoria;
        $cats = Categoria::all();
        

?>
<div class="card border">
    <div class="card-body">
         <form action="{{URL::to('/store')}}" class="form-horizontal" enctype="multipart/form-data" method="post">
          
              <input type="hidden" name="_token" value="{{csrf_token()}}" id="token">    

              <input type="hidden" id="id" class="form-control" name="id">
             
             
           <div class="form-group">
                        <label for="nomeProduto" class="control-label">Nome do Produto</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="nomeProduto" placeholder="Nome do produtoproduto" name="nome">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="precoProduto" class="control-label">Fornecedor:</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="precoProduto" placeholder="Informe o Link do Fornecedor" name="link">
                        </div>
                    </div>       
                    <div class="form-group">
                        <label for="precoProduto" class="control-label">Preço</label>
                        <div class="input-group">
                            <input type="Float" class="form-control" id="precoProduto" placeholder="Preço do produto" name="preco">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="precoProduto" class="control-label">Numero Maximo de Parcelas</label>
                        <div class="input-group">
                            <input type="number" class="form-control" id="prestacao" placeholder="INFORME A QUANTIDADE MAXIMA DE PARCELAS" name="prestacao">
                        </div>
                    </div> 
                     <div class="form-group">
                        <label for="precoProduto" class="control-label">Porcentagem de Juros Sobres as Parcelas</label>
                        <div class="input-group">
                            <input type="Float" class="form-control" id="precoProduto" placeholder="Ex: 10%(Não coloque o simbolo de porcentagem!)" name="juro">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="precoProduto" class="control-label">Colocar Produto em Destaque?</label>
                        <div class="input-group">
                            
                            <select class="form-control" name="destaque">
                            <option value="1">COLOCAR PRODUTO NO ESPAÇO DE PRINCIPAIS PRODUTOS</option>
                            <option value="2">COLOCAR O PRODUTO NO ESPAÇO DE OFERTA</option>    
                            <option value="3">SOMENTE COLOCAR O PRODUTO NA PAGINA PRINCIPAL</option>    
                            <option value="4">NÃO COLOCAR O PRODUTO NA PAGINA PRINCIPAL</option>    
                            
                            </select>        
                        </div>
                    </div>    
                    
                    <div class="form-group">
                        <label for="quantidadeProduto" class="control-label">Quantidade</label>
                        <div class="input-group">
                            <input type="number" class="form-control" id="quantidadeProduto" placeholder="Quantidade do produto" name="estoque">
                        </div>
                    </div> 
                    
                    <div class="form-group">
                        <label for="classificacao" class="control-label">Classificacao</label>
                        <div class="input-group">
                             
                            <select class="form-control" name="classificacao">
                            <option value="5">Cinco Estrelas</option>
                            <option value="4">Quatro Estrelas</option>
                            <option value="3">Três Estrelas</option>
                            <option value="2">Duas Estrelas</option>
                            <option value="1">Uma Estrelas</option>
                            
                            
                            </select>   
                        </div>
                    </div>   
                    
                    <div class="form-group">
                        <label for="fabricao" class="control-label">Fabricação</label>
                        <div class="input-group">
                            <input type="date" class="form-control" id="fabricacao" placeholder="fabricacao" name="fabricacao">
                        </div>
                    </div> 
                    
                    <div class="form-group">
                        <label for="fabricao" class="control-label">Validade</label>
                        <div class="input-group">
                            <input type="date" class="form-control" id="validade" placeholder="validade" name="validade">
                        </div>
                    </div> 
                    
                    <div class="form-group">
                        <label for="url" class="control-label">url</label>
                        <div class="input-group">
                            <input type="file" class="form-control" id="url" placeholder="url" name="image">
                        </div>
                    </div>   

                    <div class="form-group">
                        <label for="categoriaProduto" class="control-label">Categoria</label>
                        <div class="input-group">
                           
                            <select class="form-control" name="categoria_id"> 
                                 @foreach($cats as $cat)
                                <option value="{{$cat->id}}"> {{$cat->nome}}</option>
                                 @endforeach 
                            </select>
                    
                        </div>
                    </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <a type="cancel" class="btn btn-danger btn-sm" href="/produtos">Cancel</a>
        </form>
    </div>
</div>

@endsection