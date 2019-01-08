<?php  

use App\Sl;
use App\Categoria;
use App\Menu_Superior;
use Illuminate\Http\Request;
  $sl = Sl::all(); 
  $cat = Categoria::all();
  $menu = Menu_Superior::all();
?> 


<!DOCTYPE html>
<html lang="pt-br">
<head>
	 <title>   
      @foreach($sl as $s)
        {{$s->nome}}
      @endforeach   
    
      
    </title>

	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}">  
	<!-- icone -->   
	<link href="img/logo%20a.png" rel="shortcut icon"/>

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
	<!-- Carregar -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	
	<!-- Cabeçalho -->
	<header class="header-section">
		<div class="container-fluid">
			<!-- logo -->
			<div class="site-logo">
            
			</div>
			<!-- responsivo -->
            
    
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<div class="header-right">
				<a href="cart.html" class="card-bag"><img src="{{asset('css/img/icons/bag.png')}}" alt=""><span>0</span></a>
			</div>
			<!-- site menu -->
			<ul class="main-menu">
                <form class="search">
                <input class="searchTerm" placeholder="  O que você procura?" /><input class="searchButton" type="submit" />
                </form>
				  @foreach($menu as $m)
                <li><a href="/test_ryan">{{$m->item_nome}}</a></li>
				  @endforeach         
			</ul>
		</div>
	</header>
	<!-- Fim do cabeçalho -->


	<!-- Seção do Slide -->
                                                
	<section class="hero-section set-bg" data-setbg="{{asset('css/img/bg1.jpg')}}">
		<div class="hero-slider owl-carousel">
			<div class="hs-item">                <!-- IMG DE 1036x846 -->
				<div class="hs-left"><img src="{{asset('css/img/slider-img.png')}}" alt=""></div>
				<div class="hs-right">
					<div class="hs-content">
						<div class="price">Ouse inovar!</div>
						<h2><span style="font-size: 28px">Melhores produtos</span> <br>Melhores serviços</h2>
						<h4 class="site-btn">Compre agora!</a></h4>
					</div>	
				</div>
			</div>
			<div class="hs-item">                <!-- IMG DE 1036x846 -->
				<div class="hs-left"><img src="{{asset('css/img/slider-img.png')}}" alt=""></div>
				<div class="hs-right">
					<div class="hs-content">
						<div class="price">AAAAAA</div>
						<h2><span>BBBB</span> <br>CCCC</h2>
						<a href="" class="site-btn">DDDDD</a>
					</div>	
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->

	
	<!-- Intro section -->
	<section class="intro-section spad pb-0">
		<div class="section-title">
			<h2>Principais produtos</h2>
			<p>Nós recomendamos</p>
		</div>
		<div class="intro-slider">
			<ul class="slidee">
				<li>
					<div class="intro-item">
						<figure>
							<img src="{{asset('css/img/intro/1.jpg')}}" alt="#">
						</figure>
						<div class="product-info">
							<h5>PRODUTO</h5>
							<p>R$000.00</p>
							<a href="product.html" class="site-btn btn-line">VER PRODUTO</a>
						</div>
                    </div>
				</li>
				<li>
					<div class="intro-item">
						<figure>
							<img src="{{asset('css/img/intro/2.jpg')}}" alt="#">
						</figure>
						<div class="product-info">
							<h5>PRODUTO</h5>
							<p>R$000.00</p>
							<a href="product.html" class="site-btn btn-line">VER PRODUTO</a>
						</div>
					</div>
				</li>
				<li>
					<div class="intro-item">
						<figure>
							<img src="{{asset('css/img/intro/3.jpg')}}" alt="#">
							<div class="bache">NOVO!</div>
						</figure>
						<div class="product-info">
							<h5>PRODUTO</h5>
							<p>R$000.00</p>
							<a href="product.html" class="site-btn btn-line">VER PRODUTO</a>
						</div>
					</div>
				</li>
				<li>
					<div class="intro-item">
						<figure>
							<img src="{{asset('css/img/intro/4.jpg')}}" alt="#">
						</figure>
						<div class="product-info">
							<h5>PRODUTO</h5>
							<p>R$000.00</p>
							<a href="product.html" class="site-btn btn-line">VER PRODUTO</a>
						</div>
					</div>
				</li>
				<li>
					<div class="intro-item">
						<figure>
							<img src="{{asset('css/img/intro/5.jpg')}}" alt="#">
						</figure>
						<div class="product-info">
							<h5>PRODUTO</h5>
							<p>R$000.00</p>
							<a href="product.html" class="site-btn btn-line">VER PRODUTO</a>
						</div>
					</div>
				</li>
			</ul>
		</div>
		<div class="container">
			<div class="scrollbar">
				<div class="handle">
					<div class="mousearea"></div>
				</div>
			</div>
		</div>
	</section>
	<!-- Intro section end -->


	<!-- Featured section -->
	<div class="featured-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="featured-item">
						<img src="{{asset('css/img/OFERTA.jpg')}}" alt="">
						<a href="#" class="site-btn">VER MAIS</a>
					</div>
				</div>
				<div class="col-md-6">
					<div class="featured-item mb-0">
						<img src="{{asset('css/img/OFERTA.jpg')}}" alt="">
						<a href="#" class="site-btn">VER MAIS</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Featured section end -->


	<!-- Product section -->
	<section class="product-section spad">
		<div class="container">
			<ul class="product-filter controls">
				<li class="control" data-filter=".new">Novos produtos</li>
				<li class="control" data-filter="all">Recomendados</li>
				<li class="control" data-filter=".best">Mais Vendidos</li>
			</ul>
			<div class="row" id="product-filter">
				<div class="mix col-lg-3 col-md-6 best">
					<div class="product-item">
						<figure>
							<img src="{{asset('css/img/products/1.jpg')}}" alt="">
							<div class="pi-meta">
								<a href="product.html"><div class="pi-m-left">
									<img src="{{asset('css/img/icons/eye.png')}}" alt="">
									<p>Vista rápida</p>
								</div></a>
								<div class="pi-m-right">
									<img src="{{asset('css/img/icons/heart.png')}}" alt="">
									
								</div>
							</div>
						</figure>
						<div class="product-info">
							<h6>Produto</h6>
							<p>R$00.00</p>
							<a href="#" class="site-btn btn-line">ADICIONAR AO CARRINHO</a>
						</div>
					</div>
				</div>
				<div class="mix col-lg-3 col-md-6 new">
					<div class="product-item">
						<figure>
							<img src="{{asset('css/img/products/2.jpg')}}" alt="">
							<div class="bache">NOVO!</div>
							<div class="pi-meta">
								<a href="product.html"><div class="pi-m-left">
									<img src="{{asset('css/img/icons/eye.png')}}" alt="">
									<p>Vista rápida</p>
								</div></a>
								<div class="pi-m-right">
									<img src="{{asset('css/img/icons/heart.png')}}" alt="">
									
								</div>
							</div>
						</figure>
						<div class="product-info">
							<h6>Produto</h6>
							<p>R$00.00</p>
							<a href="#" class="site-btn btn-line">ADICIONAR AO CARRINHO</a>
						</div>
					</div>
				</div>
				<div class="mix col-lg-3 col-md-6 best">
					<div class="product-item">
						<figure>
							<img src="{{asset('css/img/products/3.jpg')}}" alt="">
							<div class="pi-meta">
								<a href="product.html"><div class="pi-m-left">
									<img src="{{asset('css/img/icons/eye.png')}}" alt="">
									<p>Vista rápida</p>
								</div></a>
								<div class="pi-m-right">
									<img src="{{asset('css/img/icons/heart.png')}}" alt="">
									
								</div>
							</div>
						</figure>
						<div class="product-info">
							<h6>Produto</h6>
							<p>R$00.00</p>
							<a href="#" class="site-btn btn-line">ADICIONAR AO CARRINHO</a>
						</div>
					</div>
				</div>
				<div class="mix col-lg-3 col-md-6 new best">
					<div class="product-item">
						<figure>
							<img src="{{asset('css/img/products/4.jpg')}}" alt="">
							<div class="bache sale">OFERTA!</div>
							<div class="pi-meta">
								<a href="product.html"><div class="pi-m-left">
									<img src="{{asset('css/img/icons/eye.png')}}" alt="">
									<p>Vista rápida</p>
								</div></a>
								<div class="pi-m-right">
									<img src="{{asset('css/img/icons/heart.png')}}" alt="">
									
								</div>
							</div>
						</figure>
						<div class="product-info">
							<h6>Produto</h6>
							<p>R$00.00 <span></span></p>
							<a href="#" class="site-btn btn-line">ADICIONAR AO CARRINHO</a>
						</div>
					</div>
				</div>
				<div class="mix col-lg-3 col-md-6 best">
					<div class="product-item">
						<figure>
							<img src="{{asset('css/img/products/5.jpg')}}" alt="">
							<div class="pi-meta">
								<a href="product.html"><div class="pi-m-left">
									<img src="{{asset('css/img/icons/eye.png')}}" alt="">
									<p>Vista rápida</p>
								</div></a>
								<div class="pi-m-right">
									<img src="{{asset('css/img/icons/heart.png')}}" alt="">
									
								</div>
							</div>
						</figure>
						<div class="product-info">
							<h6>Produto</h6>
							<p>R$00.00</p>
							<a href="#" class="site-btn btn-line">ADICIONAR AO CARRINHO</a>
						</div>
					</div>
				</div>
				<div class="mix col-lg-3 col-md-6 new">
					<div class="product-item">
						<figure>
							<img src="{{asset('css/img/products/6.jpg')}}" alt="">
							<div class="bache">NOVO!</div>
							<div class="pi-meta">
								<a href="product.html"><div class="pi-m-left">
									<img src="{{asset('css/img/icons/eye.png')}}" alt="">
									<p>Vista rápida</p>
								</div></a>
								<div class="pi-m-right">
									<img src="{{asset('css/img/icons/heart.png')}}" alt="">
									
								</div>
							</div>
						</figure>
						<div class="product-info">
							<h6>Produto</h6>
							<p>R$00.00</p>
							<a href="#" class="site-btn btn-line">ADICIONAR AO CARRINHO</a>
						</div>
					</div>
				</div>
				<div class="mix col-lg-3 col-md-6 best">
					<div class="product-item">
						<figure>
							<img src="{{asset('css/img/products/7.jpg')}}" alt="">
							<div class="pi-meta">
								<a href="product.html"><div class="pi-m-left">
									<img src="{{asset('css/img/icons/eye.png')}}" alt="">
									<p>Vista rápida</p>
								</div></a>
								<div class="pi-m-right">
									<img src="{{asset('css/img/icons/heart.png')}}" alt="">
									
								</div>
							</div>
						</figure>
						<div class="product-info">
							<h6>Produto</h6>
							<p>R$00.00</p>
							<a href="#" class="site-btn btn-line">ADICIONAR AO CARRINHO</a>
						</div>
					</div>
				</div>
				<div class="mix col-lg-3 col-md-6 best">
					<div class="product-item">
						<figure>
							<img src="{{asset('css/img/products/8.jpg')}}" alt="">
							<div class="pi-meta">
								<a href="product.html"><div class="pi-m-left">
									<img src="{{asset('css/img/icons/eye.png')}}" alt="">
									<p>Vista rápida</p>
								</div></a>
								<div class="pi-m-right">
									<img src="{{asset('css/img/icons/heart.png')}}" alt="">
									
								</div>
							</div>
						</figure>
						<div class="product-info">
							<h6>Produto</h6>
							<p>R$00.00 <span>R̶$̶0̶0̶.̶0̶0̶</span></p>
							<a href="#" class="site-btn btn-line">ADICIONAR AO CARRINHO</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Product section end -->


	<!-- Blog section -->	
	<section class="blog-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<div class="featured-item">
						<img src="{{asset('css/img/OFERTA1.jpg')}}" alt="">
						<a href="#" class="site-btn">Ver mais</a>
					</div>
				</div>
				<div class="col-lg-7">
					<h4 class="bgs-title">Artigos auxiliadores</h4>
					<div class="blog-item">
						<div class="bi-thumb">
							<a href="blog.html"><img src="{{asset('css/img/blog-thumb/1.jpg')}}" alt=""></a>
						</div>
						<div class="bi-content">
							<a href="blog.html"><a href="blog.html"><h5>ARTIGO DE AJUDA</h5></a>
							<div class="bi-meta">02 Julho, 2018   |   Por Alguém Smith</div>
							<a href="#" class="readmore">Ler Mais</a>
						</div>
					</div>
					<div class="blog-item">
						<div class="bi-thumb">
							<a href="blog.html"><img src="{{asset('css/img/blog-thumb/2.jpg')}}" alt=""></a>
						</div>
						<div class="bi-content">
							<a href="blog.html"><h5>ARTIGO DE AJUDA</h5></a>
							<div class="bi-meta">02 Julho, 2018   |   Por Alguém Smith</div>
							<a href="#" class="readmore">Ler Mais</a>
						</div>
					</div>
					<div class="blog-item">
						<div class="bi-thumb">
							<a href="blog.html"><img src="{{asset('css/img/blog-thumb/3.jpg')}}" alt=""></a>
						</div>
						<div class="bi-content">
							<a href="blog.html"><h5>ARTIGO DE AJUDA</h5></a>
							<div class="bi-meta">02 Julho, 2018   |   Por Alguém Smith</div>
							<a href="#" class="readmore">Ler Mais</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Blog section end -->	


	<!-- Footer top section -->	
	<section class="footer-top-section home-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-8 col-sm-12">
					<div class="footer-widget about-widget">
				        <img src="{{asset('css/img/logo.png')}}" class="footer-logo" alt="">
						<p>Breve descrição.</p>
						<div class="cards">
							<img src="{{asset('css/img/cards/5.png')}}" alt="">
							<img src="{{asset('css/img/cards/4.png')}}" alt="">
							<img src="{{asset('css/img/cards/3.png')}}" alt="">
							<img src="{{asset('css/img/cards/2.png')}}" alt="">
							<img src="{{asset('css/img/cards/1.png')}}" alt="">
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6">
					<div class="footer-widget">
						<h6 class="fw-title">Algo</h6>
						<ul>
							<li><a href="#">Algo</a></li>
							<li><a href="#">Algo</a></li>
							<li><a href="#">Algo</a></li>
							<li><a href="#">Algo</a></li>
							<li><a href="#">Algo</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6">
					<div class="footer-widget">
						<h6 class="fw-title">Algo</h6>
						<ul>
							<li><a href="#">Algo</a></li>
							<li><a href="#">Algo</a></li>
							<li><a href="#">Algo</a></li>
							<li><a href="#">Algo</a></li>
							<li><a href="#">Algo</a></li>
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
	<!-- Footer top section end -->	

		<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<p class="copyright">
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by Colorlib
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
		</div>
	</footer>
	<!-- Footer section end -->


	<!--====== Javascripts & Jquery ======-->
	
   <script src="{{ asset('js/app.js')}}" type="text/javascript"> </script> 
	
	<script src="{{asset('js/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('js/js/mixitup.min.js')}}"></script>
	<script src="{{asset('js/js/sly.min.js')}}"></script>
	
	<script src="{{asset('js/js/main.js')}}"></script>
    </body>
</html>