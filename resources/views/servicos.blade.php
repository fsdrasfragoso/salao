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
    $p = $c*((pow($t,$Qp)*$i)/(pow($t,$Qp)-1));
        
     return $p; 
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
	<link href="img/logo%20a.png" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
    <link rel="stylesheet" href="css/css/style_servicos.css"/>
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
<body><div class="todo">
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	
	<!-- Header section -->
	<header class="header-section header-normal">
		<div class="container-fluid">
			 @foreach($sl as $s)
            <!-- Logo -->
			<div class="logo">
<th><span class="myButton">SALÃO de Beleza </span></th><th><span class="myButton1">{{$s->nome}}</span></th>
</div> <br/>
			@endforeach
            <!-- responsivo -->
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<!-- site menu -->
			<ul class="main-menu">
				<li><a href="index.html">Home</a></li>
				  @foreach($menu as $m)
                <li><a href="/test_ryan">{{$m->item_nome}}</a></li>
				  @endforeach         
			</ul>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Page Info -->
	<div class="page-info-section page-info">
		<div class="container">
			<div class="site-breadcrumb">
				<a href="#">Home</a>
				<span>Serviços</span>
			</div>
			<img src="{{asset('css/img/page-info-art.png')}}" alt="" class="page-info-art">
		</div>
	</div>
    
	<!-- Page -->
    <br><br><br>
    <center>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="width:80%;" > 
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url(css/img/servises/xservicos-pms-salao-de-beleza.jpg.pagespeed.ic.US5vXMPosm.jpg)">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url(css/img/servises/maxresdefault.jpg)">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url(css/img/servises/manicure-profissional.jpg)">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
 </center> 
    <!-- Page Content -->

      <!-- Marketing Icons Section -->
      <div class="row" style="margin-top: 1%; margin-left: 17%;">
        <div class="col-lg-3 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Cabelereiro</h4>
            <div class="card-body">
              <p class="card-text">
                Cortes<br>
                Escovas<br>
                Tratamento Capilar
                </p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-dark">Saiba Mais</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Maquiagem</h4>
            <div class="card-body">
              <p class="card-text">
                fazemos todos os tipos de maquiagens, todas para o momento certo.
                </p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-dark">Saiba Mais</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Manicure/Pedicure</h4>
            <div class="card-body">
              <p class="card-text">A nossa preocupação maior e primordial é a saúde de nossos clientes. Todos os instrumentos em aço utilizados nos procedimentos de manicure e pedicure são esterilizados em autoclaves próprias e visíveis aos clientes.
                </p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-dark">Saiba Mais</a>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->

      <!-- Portfolio Section --><div class="portfolio">
      <h2>Conhaça Nosso Trabalho</h2>

      <div class="row">
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="{{asset('css/img/servises/download%20(1).jpg')}}"></a>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="{{asset('css/img/servises/aluma.jpg')}}"></a>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="{{asset('css/img/servises/xservicos-pms-salao-de-beleza.jpg.pagespeed.ic.US5vXMPosm.jpg')}}" ></a>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="{{asset('css/img/thumb_young-woman-holding-laptop-yellow-background.jpg')}}" ><a>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="{{asset('css/img/thumb_young-woman-thinking-pink-background.jpg')}}"></a>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="{{asset('css/img/asian-girls-popular-thai-names-meaning.jpeg')}}" ></a>
          </div>
        </div>
          </div>
      <!-- /.row -->

      <!-- Features Section -->
      <div class="row">
        <div class="col-lg-6 text-dark">
          <h2>Salão Khaleesi</h2>
          <p>Moderno e Elegante. Te proporciona o melhor serviço da cidade.</p>
          <ul>
            <li>Matização dos fios  </li>
            <li>Design de sobrancelhas</li>
            <li>Massagem relaxante</li>
            <li>Automaquiagem</li>
            <li>Spa de mãos</li>
          </ul>
          <p>conhaça mais nos Visitando. Endereço: rua exemplo do exemplo da exemplo numero xxx</p>
        </div>
        <div class="col-lg-6">
          <img class="img-fluid rounded" src="{{asset('css/img/servises/manicure-profissional.jpg')}}" width="500px">
        </div>
      </div>
      <!-- /.row -->

      <hr>

      <!-- Call to Action Section -->
      <div class="row mb-4">
        <div class="col-md-3 text-black" >
          <p>Mais informações sobre o nossos servisos. acesse nossas redes sociais.</p>
        </div>
        <div class="col-md-4 ">
            <a href="#" class="fa fa-facebook" style="width: 70px"></a>
            <a href="#" class="fa fa-twitter" style="width: 70px"></a>
            <a href="#" class="fa fa-instagram" style="width: 70px"></a>
        
        </div>
      </div>

            </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-black">
      <div class="container">
        <p class="m-0 text-center text-black">Copyright &copy; Equipe MedioTec 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


	<!-- Page end -->


	<!-- Footer top section -->	
	<section class="footer-top-section home-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-8 col-sm-12">
					<div class="footer-widget about-widget">
<div class="logo"><th><span class="myButton1">Khaleesi</span></th>
</div>
						<p>Breve descrição</p>
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
							<li><a href="#">Metódos de envio</a></li>
							<li><a href="#">Blog</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6">
					<div class="footer-widget">
						<h6 class="fw-title">Contato</h6>
						<div class="text-box">
							<p>Nome da Empresa </p>
							<p>Endereço da Empresa</p>
							<p>Número da Empresa</p>
							<p>Email da Empresa</p>
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
	<script src="{{ asset('js/js/app.js')}}" type="text/javascript"> </script> 
	<script src="{{ asset('js/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{ asset('js/js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('js/js/owl.carousel.min.js')}}"></script>
	<script src="{{ asset('js/js/mixitup.min.js')}}"></script>
	<script src="{{ asset('js/js/sly.min.js')}}"></script>
	<script src="{{ asset('js/js/jquery.nicescroll.min.js')}}"></script>
	<script src="{{ asset('js/js/main.js')}}"></script></div>
    </body>
</html>