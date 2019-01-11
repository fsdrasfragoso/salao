@extends('layout.app', ["current" => "Imagens"])

@section('body')

<div class="card border">
    <div class="card-body">
        <form action="{{URL::to('/image')}}" enctype="multipart/form-data" method="post">
          
              <input type="hidden" name="_token" value="{{csrf_token()}}" id="token">    

              <input type="hidden" id="produto_id" class="form-control" name="produto_id" value="{{$id}}">
            @csrf
            <div class="form-group">
                        <label for="imagem" class="control-label">Imagem</label>
                        <div class="input-group">
                            <input type="file" class="form-control" id="imagem" placeholder="Imagem" name="image">
                        </div>
            </div>   
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <a type="cancel" class="btn btn-danger btn-sm" href="/inserirImagem/{{$id}}">Cancel</a>
        </form>
    </div>
</div>

@endsection