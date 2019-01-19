@extends('layout.app', ["current" => "Banner Serviço"])

@section('body')

<div class="card border">
    <div class="card-body">
        <form action="/bannerS" enctype="multipart/form-data" method="post">
          
              <input type="hidden" name="_token" value="{{csrf_token()}}" id="token">    

             
            @csrf
            <div class="form-group">
                        <label for="url" class="control-label">Imagem</label>
                        <div class="input-group">
                            <input type="file" class="form-control" id="url" placeholder="Imagem" name="url">
                        </div>
            </div>   
            <div class="form-group">
                        <label for="url" class="control-label">Alt</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="alt" placeholder="Alt" name="alt">
                        </div>
            </div>   
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <a type="cancel" class="btn btn-danger btn-sm" href="/bannerS">Cancel</a>
        </form>
    </div>
</div>

@endsection