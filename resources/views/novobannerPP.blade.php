@extends('layout.app', ["current" => "BannerPP"])

@section('body')

<div class="card border">
    <div class="card-body">
        <form action="/bannerPP" enctype="multipart/form-data" method="post">
          
              <input type="hidden" name="_token" value="{{csrf_token()}}" id="token">    

             
            @csrf
            <div class="form-group">
                <label for="titulo" class="control-label">Titulo</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="titulo" placeholder="Titulo" name="titulo">
                </div>
            </div>
            
           <div class="form-group">
                <label for="titulo" class="control-label">Slogan</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="slogan" placeholder="Slogan" name="slogan">
                </div>
            </div>
            
<div class="form-group">
                <label for="titulo" class="control-label">Descrição</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="Descricao" placeholder="Descrição" name="descricao">
                </div>
            </div>
            
<div class="form-group">
                <label for="titulo" class="control-label">Link</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="link" placeholder="Link" name="link">
                </div>
            </div>
            
<div class="form-group">
                <label for="titulo" class="control-label">Butão</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="button" placeholder="Butão" name="butaao">
                </div>
            </div>
            

            
            <div class="form-group">
                        <label for="url" class="control-label">Imagem do Banner</label>
                        <div class="input-group">
                            <input type="file" class="form-control" id="url" placeholder="Imagem" name="url">
                        </div>
            </div>   
             
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <a type="cancel" class="btn btn-danger btn-sm" href="/bannerPP">Cancel</a>
        </form>
    </div>
</div>

@endsection