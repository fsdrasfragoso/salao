<nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">
  <button class="navbar-toggler" type="button" data-toggle="collapse" 
          data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbar">
    <ul class="navbar-nav mr-auto">
      <li @if($current=="home") class="nav-item active" @else class="nav-item" @endif>
        <a class="nav-link" href="/">Home </a>
      </li>
      <li @if($current=="produtos") class="nav-item active" @else class="nav-item" @endif>
        <a class="nav-link" href="/produtos">Produtos</a>
      </li>
      <li @if($current=="categorias") class="nav-item active" @else class="nav-item" @endif>
        <a class="nav-link" href="/categorias">Categorias </a>
      </li>
        
      <li @if($current=="CadastroMenu") class="nav-item active" @else class="nav-item" @endif>
        <a class="nav-link" href="/CadastroMenu">Cadastro Menu</a>
      </li>
      
       <li @if($current=="NomeSistema") class="nav-item active" @else class="nav-item" @endif>
        <a class="nav-link" href="/sl">Cadastro Nome do Sistema</a>
      </li>
        
        
       <li @if($current=="Funcionarios") class="nav-item active" @else class="nav-item" @endif>
        <a class="nav-link" href="/funcionario">Funcionarios</a>
      </li>
    </ul>

  </div>
</nav>