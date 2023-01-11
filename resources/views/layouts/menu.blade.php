<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
  <div class="container">
    <a class="navbar-brand" href="/">Web E-Commerce Prodi SI</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
     aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="mr-auto navbar-nav"></ul>
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Produk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ URL::to('kategori') }}">Kategori</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ URL::to('kontak') }}">Kontak</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ URL::to('about') }}">Tentang Kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ URL::to('login') }}">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav> -->

                    



<section id="mu-hero">
<header id="mu-header" class="" role="banner">
		<div class="container">
			<nav class="navbar navbar-default mu-navbar">
			  	<div class="container-fluid">
				    <!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>

				      <!-- Text Logo -->
				      <a class="navbar-brand" href="/"><i class="fa fa-book" aria-hidden="true"></i>Bo'Books</a>

				      <!-- Image Logo -->
				      <!-- <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png"></a> -->


				    </div>
           
				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      	<ul class="nav navbar-nav mu-menu navbar-right">
					        <li><a href="{{ URL::to('/') }}">HOME</a></li>
					        <li><a href="{{ URL::to('produk') }}">PRODUCT</a></li>
					        <li><a href="{{ URL::to('kategori') }}">CATEGORY</a></li>
				            <li><a href="{{ URL::to('kontak') }}">CONTACT</a></li>
				            <li><a href="{{ URL::to('about') }}">ABOUT</a></li>
				            <li><a href="{{ URL::to('login') }}">LOGIN</a></li>
				      	</ul>
				    </div><!-- /.navbar-collapse -->
			  	</div><!-- /.container-fluid -->
			</nav>
		</div>
	</header>

  
		
	</section>

          