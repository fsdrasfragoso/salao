<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Carrinho - Dona Rosa</title>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}"> 
	
	
	<!-- Favicon -->   
	<link href="img/logo%20a.png" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="asset('css/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/css/style.css"/>
	<link rel="stylesheet" href="css/css/animate.css"/>
    <link href="css/app.css" rel="stylesheet">

	<!-->
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<!-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	
	<!-- Header section -->
	<header class="header-section header-normal">
		<div class="container-fluid">
			<!-- logo -->
			<div class="site-logo">
				<img src="css/css/img/sad.png" alt="logo">
			</div>
			<!-- responsive -->
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<div class="header-right">
				<a href="cart.html" class="card-bag"><img src="css/img/icons/bag.png" alt=""><span>1</span></a>
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
				<a href="#">Home</a> / 
				<span>Carrinhoooooooooooo</span>
			</div>
			<img src="css/css/img/page-info-art.png" alt="" class="page-info-art">
		</div>
	</div>
	<!-- Page Info end -->


	<!-- Page -->
	<div class="page-area cart-page spad">
		<div class="container">
			<div class="cart-table">
				<table>
					<thead>
						<tr>
							<th class="product-th">Produto</th>
							<th>Preço</th>
							<th>Quantidade</th>
							<th class="total-th">Total</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="product-col">
								<img src="css/css/img/product/cart.jpg" alt="">
								<div class="pc-title">
									<h4>PRODUTO</h4>
									
								</div>
							</td>
							<td class="price-col">R$00.00</td>
							<td class="quy-col">
								<div class="quy-input">
									<span>Qtd</span>
									<input type="number" value="01">
								</div>
							</td>
							<td class="total-col">R$00.00</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="row cart-buttons">
				<div class="col-lg-5 col-md-5">
					<div class="site-btn btn-continue">Continue comprando</div>
				</div>
				<div class="col-lg-7 col-md-7 text-lg-right text-left">
					<div class="site-btn btn-clear">Limpar Carrinho</div>
					<div class="site-btn btn-line btn-update">Atualizar Carrinho</div>
				</div>
			</div>
		</div>
		<div class="card-warp">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="shipping-info">
							<h4>Método de Envio</h4>
							<p>Selecione o de Preferência</p>
							<div class="shipping-chooes">
								<div class="sc-item">
									<input type="radio" name="sc" id="one">
									<label for="one">ENVIO1<span>R$00.00</span></label>
								</div>
								<div class="sc-item">
									<input type="radio" name="sc" id="two">
									<label for="two">ENVIO2<span>R$00.00</span></label>
								</div>
								<div class="sc-item">
									<input type="radio" name="sc" id="three">
									<label for="three">ENVIO3<span>R$00.00</span></label>
								</div>
							</div>
							
						</div>
					</div>
					<div class="offset-lg-2 col-lg-6">
						<div class="cart-total-details">
							<h4>Total do Carrinho</h4>
							<p>Informação </p>
							<ul class="cart-total-card">
								<li>Total<span>R$00.00</span></li>
								<li>Envio<span>Grátis</span></li>
								<li class="total">Total<span>R$00.00</span></li>
							</ul>
							<a class="site-btn btn-full" href="#">Prosseguir para o pagamento</a>
						</div>
					</div>
				</div>
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
						<img src="css/css/img/logo.png" class="footer-logo" alt="">
						<p>Breve descrição</p>
						<div class="cards">
							<img src="css/img/cards/5.png" alt="">
							<img src="css/img/cards/4.png" alt="">
							<img src="css/img/cards/3.png" alt="">
							<img src="css/img/cards/2.png" alt="">
							<img src="css/img/cards/1.png" alt="">
							
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
<i class="fa fa-heart-o" aria-hidden="true"></i> 

</p>
		</div>
	</footer>
	
	  <script src="js/app.js" type="text/javascript"></script>
    
	<script src="js/js/owl.carousel.min.js"></script>
	<script src="js/js/mixitup.min.js"></script>
	<script src="js/js/sly.min.js"></script>
	
	<script src="js/js/main.js"></script>
    </body>
</html>