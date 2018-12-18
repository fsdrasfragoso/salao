@extends('layout.app', ["current" => "produtos" ])

@section('body')
<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Cadastro de Produtos</h5>


        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome do Produto</th>
                    <th>Estoque</th>
                    <th>Preço</th>
                    <th>Classificação</th>
                    <th>Imagem</th>
                    <th>Categoria</th>
                </tr>
            </thead>
            <tbody>
   
            </tbody>
        </table>
     
    </div>
    <div class="card-footer">
        <button class="btn btn-sm btn-primary" role="button">Nova produto</button>
    </div>
</div>



@endsection