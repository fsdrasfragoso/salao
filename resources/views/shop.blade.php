<?php  

use App\Sl;
use App\Categoria;
use App\Menu_Superior;
use Illuminate\Http\Request;
use App\Produto;
  $sl = Sl::all(); 
  $cat = Categoria::all();
  $menu = Menu_Superior::all();
  $prod = Produto::all(); 


function getparcela($Qp, $juro, $c){
   $i=$juro/100;
    $t=1+$i;
    $k = pow($t,$Qp)-1;
    if(is_numeric($k)){
    if($k!=0 or $juro!=0 or $Qp!=0){
    $p = $c*((pow($t,$Qp)*$i)/( $k == 0 ? 1 : $k ));
        
     return $p;
    }else if($Qp != 0){
        $p = $c / $Qp;
        return $p;
    }else{
        $p = $c/10; 
        return $p;
    }
    }else{
          $p = $c/10; 
          return $p;  
    }

}
?> 

<!DOCTYPE html>


<html lang="pt-br">
<head>
	<title> 
      @foreach($sl as $s)
        {{$s->nome}}
      @endforeach   - SHOP
    </title>
	<meta charset="UTF-8">
	<meta name="description" content="The Plaza eCommerce Template">
	<meta name="keywords" content="plaza, eCommerce, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}"> 
	<!-- Favicon -->   
	<link href="../css/img/logo%20a.png" rel="shortcut icon"/>
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{asset('css/css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/css/owl.carousel.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/css/style.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/css/animate.css')}}"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Preloader -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	
	<!-- Cabeçalho -->
	<header class="header-section header-normal">
		<div class="container-fluid">
			 @foreach($sl as $s)
            <!-- Logo -->
			<div class="logo">
<th><a class="myButton" href="/SERVICOS">SALÃO de Beleza </a></th><th><a class="myButton1" href="/">{{$s->nome}}</a></th>
</div> <br/>
			@endforeach
            <!-- responsivo -->
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<div class="header-right">
                <a href="cart.html" class="card-bag"><img src="img/icons/bag.png" alt=""><span>0</span></a>
			</div>
			<!-- site menu -->
			<ul class="main-menu">
				<li><a href="/">Home</a></li>
				   @foreach($menu as $m)
                <li><a href="/{{$m->item_nome}}">{{$m->item_nome}}</a></li>
				  @endforeach         
			</ul>
		</div>
	</header>
	


	<!-- Page Info -->
	<div class="page-info-section page-info-big">
		<div class="container">
			<h2>Categorias</h2>
			<div class="site-breadcrumb">
                <a href="">Home</a> <?php $i = 0; ?>@foreach($cat as $c)/ <?php $i++; if($i<=5){?><a href="/cat/{{$c->id}}">{{$c->nome}}</a><?php }else{?> <br/> / <a href="/cat/{{$c->id}}">{{$c->nome}} </a> / <?php } ?>@endforeach
				<span>Shop</span>
			</div>
			<img src="{{asset('css/img/categorie-page-top.png')}}" alt="" class="cata-top-pic">
		</div>
	</div>
	


	<!-- Page -->
	<div class="page-area categorie-page spad">
		<div class="container">
			<div class="categorie-filter-warp">
				<p>Exibindo 12 resultados</p>
				<div class="cf-right">
					<div class="cf-layouts">
						<a href="#"><img src="img/icons/layout-1.png" alt=""></a>
						<a class="active" href="#"><img src="img/icons/layout-2.png" alt=""></a>
					</div>
					<form action="#">
						<select>
							<option>Categoria</option>
						</select>
						<select>
							<option>Marca</option>
						</select>
						<select>
							<option>Filtrar por</option>
						</select>
					</form>
				</div>
			</div>
			<div class="row">
				@foreach($prod as $p)
                <a href="/produtoID/{{$p->id}}">
                <div class="col-lg-3">
					<div class="product-item">
						<figure>
							<img src="{{$p->url}}" alt="">
							<div class="pi-meta">
								<div class="pi-m-left">
									<img src="img/icons/eye.png" alt="">
									<p>Vista rápida</p>
								</div>
								<div class="pi-m-right">
									<img src="img/icons/heart.png" alt="">
									
								</div>
							</div>
						</figure>
						<div class="product-info">
							<h6>{{$p->nome}}</h6>
							<p>R${{number_format($p->preco,2,",",".")}}</p>
                             <h6 style="color: #ff2340; font-size: 13px;"><strong>(ou em até {{$p->prestacao}}x de: R$<?php
                            echo number_format( getparcela($p->prestacao,$p->juro,$p->preco),2,",",".");
                            
                            
                            ?>)</strong></h6>
							<a href="#" class="site-btn btn-line">ADICIONAR AO CARRINHO</a>
						</div>
					</div>
               
				</div>
             </a> 
                @endforeach
				
			<div class="site-pagination">
				<span class="active">01.</span>
				<a href="">02.</a>
				<a href="">03.</a>
				<a href="">04.</a>
				<a href="">05.</a>
				<a href="">06</a>
			</div>
		</div>
	</div>
	


	<!-- Rodapé -->	
	<section class="footer-top-section home-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-8 col-sm-12">
					<div class="footer-widget about-widget">
						<img src="img/logo.png" class="footer-logo" alt="">
						<p>Breve descrição</p>
						<div class="cards">
							<img src="img/cards/5.png" alt="">
							<img src="img/cards/4.png" alt="">
							<img src="img/cards/3.png" alt="">
							<img src="img/cards/2.png" alt="">
							<img src="img/cards/1.png" alt="">
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6">
					<div class="footer-widget">
						<h6 class="fw-title">ALGO</h6>
						<ul>
							<li><a href="#">ALGO</a></li>
							<li><a href="#">ALGO</a></li>
							<li><a href="#">ALGO</a></li>
							<li><a href="#">ALGO</a></li>
							<li><a href="#">ALGO</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6">
					<div class="footer-widget">
						<h6 class="fw-title">ALGO</h6>
						<ul>
							<li><a href="#">ALGO</a></li>
							<li><a href="#">ALGO</a></li>
							<li><a href="#">ALGO</a></li>
							<li><a href="#">ALGO</a></li>
							<li><a href="#">ALGO</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6">
					<div class="footer-widget">
						<h6 class="fw-title">Importante</h6>
						<ul>
							<li><a href="#">Sobre nós</a></li>
							<li><a href="#">Rastreie sua encomenda</a></li>
							<li><a href="#">Serviços</a></li>
							<li><a href="#">Métodos de envio</a></li>
							<li><a href="#">Blog</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6">
					<div class="footer-widget">
						<h6 class="fw-title">Contato</h6>
						<div class="text-box">
							<p>Nome da Empresa </p>
							<p>Endereço da Empresa </p>
							<p>Número para contato</p>
							<p>Email da empresa</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	


	
	<footer class="footer-section">
		<div class="container">
			<p class="copyright">

Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by Colorlib

</p>
		</div>
	</footer>
	


	<!--====== Javascripts & Jquery ======-->
    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
	
	
	<script src="{{ asset('js/js/owl.carousel.min.js')}}" type="text/javascript"></script>
	<script src="{{ asset('js/js/mixitup.min.js')}}" type="text/javascript"></script>
	<script src="{{ asset('js/js/sly.min.js')}}" type="text/javascript"></script>
	<script src="{{ asset('js/js/jquery.nicescroll.min.js')}}" type="text/javascript"></script>
	<script src="{{ asset('js/js/main.js')}}" type="text/javascript"></script>
        
    </body>
</html>
    
    