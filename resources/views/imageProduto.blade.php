@extends('layout.app', ["current" => "Imagem do produto"])

@section('body')
<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Imagens do Produto</h5>

@if(count($image) > 0)
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Imagem</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
    @foreach($image as $img)
                <tr>
                    <td>{{$img->id}}</td>
                    <td><img src="../{{$img->image}}" alt="" height="200px"></td>
                    <td>
                       
                        <a href="/imagem/apagar/{{$img->id}}" class="btn btn-sm btn-danger">Apagar</a>
                    </td>
                </tr>
               
    @endforeach                
            </tbody>
        </table>
@endif        
    </div>
    <div class="card-footer">
        <a href="/imagem/novo/{{$id}}" class="btn btn-sm btn-primary" role="button">Nova Imagem</a>
    </div>
</div>



@endsection