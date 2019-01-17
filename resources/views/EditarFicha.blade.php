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
<html lang="zxx">
<head>
	<title>
    @foreach($sl as $s)
           {{$s->nome}}
    @endforeach    
    </title>
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
			@foreach($sl as $s)
            <!-- Logo -->
			<div class="logo">
<th><span class="myButton">SALÃO de Beleza </span></th><th><span class="myButton1">{{$s->nome}}</span></th>
</div> <br/>
			@endforeach
			<!-- responsive -->
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<div class="header-right">
				<a href="cart.html" class="card-bag"><img src="../css/img/icons/bag.png" alt=""><span>0</span></a>
			</div>
			<!-- site menu -->
			@if(count($menu)>0)
            <ul class="main-menu">
				<li><a href="index.html">Home</a></li>
                @foreach($menu as $m)
             
				<li><a href="{{$m->item_nome}}">{{$m->item_nome}}</a></li>
			     @endforeach  
			</ul>
            @else
               <ul class="main-menu">
				<li><a href="index.html">Home</a></li>               
				<li><a href="/shop">Shop</a></li>
				<li><a href="/servicos">Serviços</a></li>
				<li><a href="/blog">Blog</a></li>
				<li><a href="/sobre">Sobre nós</a></li>
				<li><a href="/contato">Contato</a></li>
			</ul>
             @endif
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
                        
						@foreach($p->ficah_tecnica as $ficha)
                         <div class="size-choose">
						<a href="/editarFichaTecnica/{{$ficha->id}}" class="site-btn btn-line">Editar Ficha Tecnica</a>
					</div>
                        <p>Marca: {{$ficha->modelo}}</p>
                        
                        <p>Modelo: {{$ficha->marca}} </p>
                        
					  <?php echo '<p>Caracteristicas:</p>'.$ficha->caracteristicas ?>
                        @endforeach
                       
				</div>
			</div>
		
			
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