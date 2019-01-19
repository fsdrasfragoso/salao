@extends('layout.app', ["current" => "Banner Serviços"])

@section('body')
<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Banner da Pagina Serviço</h5>

@if(count($banner) > 0)
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Imagem</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
    @foreach($banner as $b)
                <tr>
                    <td>{{$b->id}}</td>
                    <td><img src="/{{$b->url}}" alt="{{$b->alt}}" height="200px"></td>
                    <td>
                       
                        <a href="/bannerS/apagar/{{$b->id}}" class="btn btn-sm btn-danger">Apagar</a>
                    </td>
                </tr>
               
    @endforeach                
            </tbody>
        </table>
@endif        
    </div>
    <div class="card-footer">
        <a href="/bannerS/novo/" class="btn btn-sm btn-primary" role="button">Nova Imagem</a>
    </div>
</div>



@endsection