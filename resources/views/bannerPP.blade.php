@extends('layout.app', ["current" => "Banner"])

@section('body')
<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Cadastro de Banner</h5>

@if(count($banner) > 0)
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Titulo</th>
                    <th>Slogan</th>
                    <th>Descrição</th>
                    <th>imagem</th>
                    <th>Butão</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
    @foreach($banner as $b)
                <tr>
                    <td>{{$b->id}}</td>
                    <td>{{$b->titulo}}</td>
                    <td>{{$b->slogan}}</td>
                    <td>{{$b->descricao}}</td>
                    <td><img src="{{$b->url}}" height="50px" alt="{{$b->titulo}}"> </td>
                    <td><a href="{{$b->link}}" class="btn btn-sm btn-light">{{$b->butaao}}</a> </td>
                    <td>
                        <a href="/bannerPP/editar/{{$b->id}}" class="btn btn-sm btn-primary">Editar</a>
                        <a href="/bannerPP/apagar/{{$b->id}}" class="btn btn-sm btn-danger">Apagar</a>
                    </td>
                </tr>
    @endforeach                
            </tbody>
        </table>
@endif        
    </div>
    <div class="card-footer">
        <a href="/bannerPP/novo" class="btn btn-sm btn-primary" role="button">Nova categoria</a>
    </div>
</div>



@endsection