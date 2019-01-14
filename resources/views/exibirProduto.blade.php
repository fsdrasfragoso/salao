<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Produto - Dona Rosa</title>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- icone -->   
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
     @foreach($prod as $p)
	<!-- Carregar -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	
	<!-- Cabeçalho -->
	<header class="header-section header-normal">
		<div class="container-fluid">
			<!-- logo -->
			<div class="site-logo">
				<img src="../css/img/sad.png" alt="logo">
			</div>
			<!-- responsive -->
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<div class="header-right">
				<a href="cart.html" class="card-bag"><img src="../css/img/icons/bag.png" alt=""><span>0</span></a>
			</div>
			<!-- site menu -->
			<ul class="main-menu">
				<li><a href="index.html">Home</a></li>
				<li><a href="shop.html">Shop</a></li>
				<li><a href="#">Serviços</a></li>
				<li><a href="#">Blog</a></li>
				<li><a href="#">Sobre nós</a></li>
				<li><a href="contact.html">Contato</a></li>
			</ul>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Page Info -->
	<div class="page-info-section page-info">
		<div class="container">
			<div class="site-breadcrumb">
				<a href="">Home</a> / 
				<a href="">Shop</a> / 
				 
                <a href="">{{$p->categoria->nome}}</a> / 
              
				<span>{{$p->nome}}</span>
			</div>
			<img src="../css/img/page-info-art.png" alt="" class="page-info-art">
		</div>
	</div>
	<!-- Page Info end -->


	<!-- Page -->
	<div class="page-area product-page spad">
		<div class="container">
			<div class="row">
               
				<div class="col-lg-6">
					
                    <figure>
						<img class="product-big-img" src="../{{$p->url}}" alt="{{$p->nome}}">
					</figure>
                   
					<div class="product-thumbs">
						
                        <div class="product-thumbs-track">
							<div class="pt" data-imgbigurl="../{{$p->url}}"><img src="../{{$p->url}}" alt="{{$p->nome}}"></div>
							@foreach($p->imagem as $img)
                            <div class="pt" data-imgbigurl="../{{$img->image}}"><img src="../{{$img->image}}" alt="{{$p->nome}}"></div>
							@endforeach
						</div>
                        
					</div>
				</div>
                 
				<div class="col-lg-6">
					<div class="product-content">
						<h2>{{$p->nome}}</h2>
						<div class="pc-meta">
							<h4 class="price">R${{number_format($p->preco,2,",",".")}}</h4>
							<div class="review">
								@if($p->classificacao>=5)
                                <div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
                                @elseif($p->classificacao==4)
                                <div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star is-fade"></i>
								</div>
                                
                                @elseif($p->classificacao==3)
                                <div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star is-fade"></i>
									<i class="fa fa-star is-fade"></i>
								</div>
                              
                                @elseif($p->classificacao==2)
                                <div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star is-fade"></i>
									<i class="fa fa-star is-fade"></i>
									<i class="fa fa-star is-fade"></i>
								</div>
                                @else
                                <div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star is-fade"></i>
									<i class="fa fa-star is-fade"></i>
									<i class="fa fa-star is-fade"></i>
									<i class="fa fa-star is-fade"></i>
								</div>
                                @endif 
								<span>(2 avaliações)</span>
							</div>
						</div>
                         <div class="size-choose">
						<a href="#" class="site-btn btn-line">Adicionar ao carrinho</a>
					</div>
						@foreach($p->ficah_tecnica as $ficha)
                        <p>Marca: {{$ficha->modelo}}</p>
                        <p>Modelo: {{$ficha->marca}} </p>
                        
					  <?php echo '<p>Caracteristicas:</p>'.$ficha->caracteristicas ?>
                        @endforeach
                       
				</div>
			</div>
		
			<div class="row">
                <?php 
                  $op = array_reverse(array($prodOfertas));
                $i = 0;
                         
                  ?>
				@foreach($op as $po)
                 
                 <?php  if($i<3){ ?>
                <div class="col-lg-3">
                    	
					<div class="product-item">
						<figure>
							<img src="../{{$po[$i]->url}}" alt="">
                            <div class="bache">NOVO!</div>
							<div class="pi-meta">
								<div class="pi-m-left">
									<img src="../css/img/icons/eye.png" alt="">
									<p>Vista rápida</p>
								</div>
								<div class="pi-m-right">
									<img src="../css/img/icons/heart.png" alt="">
									<p>Salvar</p>
								</div>
							</div>
						</figure>
						<div class="product-info">
							<h6>{{$po[$i]->nome}}</h6>
							<p>R${{number_format($po[$i]->preco,2,",",".")}}</p>
							<a href="#" class="site-btn btn-line">Adicionar ao carrinho</a>
						</div>
					</div>
				</div>
                 <?php  $i++;} ?>  
                 @endforeach
				
				@foreach($prodOfertas as $po)
                @if($po->destaque==2)
				<div class="col-lg-3">
					<div class="product-item">
						<figure>
							<img src="../{{$po->url}}" alt="">
							<div class="bache sale">OFERTA!</div>
							<div class="pi-meta">
								<div class="pi-m-left">
									<img src="../css/img/icons/eye.png" alt="">
									<p>Vista rápida</p>
								</div>
								<div class="pi-m-right">
									<img src="../css/img/icons/heart.png" alt="">
									<p>Salvar</p>
								</div>
							</div>
						</figure>
						<div class="product-info">
							<h6>{{$po->nome}}</h6>
                            <p>R${{number_format($po->preco,2,",",".")}} <span><strike><?php $f = $po->preco *2.30; ?>R̶$̶{{number_format($f,2,",",".")}}</strike></span></p>
							<a href="#" class="site-btn btn-line">Adicionar ao carrinho</a>
						</div>
					</div>
				</div>
                @endif
                @endforeach
			</div>
		</div>
	</div> 
       
	<!-- Page end -->


	<!-- Footer top section -->	
	<section class="footer-top-section home-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-8 col-sm-12">
					<div class="footer-widget about-widget">
						<img src="img/logo.png" class="footer-logo" alt="">
						<p>Breve descrição</p>
						<div class="cards">
							<img src="../css/img/cards/5.png" alt="">
							<img src="../css/img/cards/4.png" alt="">
							<img src="../css/img/cards/3.png" alt="">
							<img src="../css/img/cards/2.png" alt="">
							<img src="../css/img/cards/1.png" alt="">
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

@endforeach
	<!--====== Javascripts & Jquery ======-->
	 <script src="{{ asset('js/app.js')}}" type="text/javascript"> </script> 
	
	<script src="{{asset('js/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('js/js/mixitup.min.js')}}"></script>
	<script src="{{asset('js/js/sly.min.js')}}"></script>
	
	<script src="{{asset('js/js/main.js')}}"></script>
    </body>
</html>