@extends('layouts.template')
@section('content')
<main role="main">


<header id="mu-counter" class="" role="banner">
<section id="mu-hero">
<div class="container-fluid">
		  <div class="navbar-header">
            <div class="container">
            <nav class="navbar navbar-default mu-navbar">
                <div class="col-md-5 col-sm-6 col-sm-push-10">
                  <div class="mu-hero-right">
                    <img src="{{asset('fn/images/bobook.png')}}" alt="bobook.png">
                  </div>
                </div>

                <div class="col-md-5 col-sm-1 col-sm-pull-2">
                  <div class="mu-hero-center">
                    <h1>Welcome to Bo'Books </h1>
                    <p>we provide a wide range of the best selection of books</p>
                    <a href="{{ URL::to('produk') }}" class="mu-primary-btn"><b>Order Now !!</b></a>
                    <span>........</span>
                  </div>
                </div>	
            </nav>
              </div>
		        </div>


</div>

 </div>
 	
	</section>


<header class="container bg-warning text-white bg-gradient" >


<div class="row">
  <div class="col-md-12 py-4 text-center">

  <section id="mu-counter">
			<div class="container">
				<div class="row">
					<div class="col-md">
						<div class="mu-counter-area">

							<div class="mu-counter-block">
								<div class="row">

									<!-- Start Single Counter -->
									<div class="col-md-3 col-sm-6">
										<div class="mu-single-counter">
											<i class="fa fa-files-o" aria-hidden="true"></i>
											<div class="counter-value" data-count="650">+100</div>
											<h5 class="mu-counter-name">Total book</h5>
										</div>
									</div>
									<!-- / Single Counter -->

									<!-- Start Single Counter -->
									<div class="col-md-3 col-sm-6">
										<div class="mu-single-counter">
											<i class="fa fa-file-text-o" aria-hidden="true"></i>
											<div class="counter-value" data-count="422">+100</div>
											<h5 class="mu-counter-name">Author</h5>
										</div>
									</div>
									<!-- / Single Counter -->

									<!-- Start Single Counter -->
									<div class="col-md-3 col-sm-6">
										<div class="mu-single-counter">
											<i class="fa fa-users" aria-hidden="true"></i>
											<div class="counter-value" data-count="1055">99%</div>
											<h5 class="mu-counter-name">Good Review</h5>
										</div>
									</div>
									<!-- / Single Counter -->

									<!-- Start Single Counter -->
									<div class="col-md-3 col-sm-6">
										<div class="mu-single-counter">
											<i class="fa fa-trophy" aria-hidden="true"></i>
											<div class="counter-value" data-count="03">10</div>
											<h5 class="mu-counter-name">Got Awards</h5>
										</div>
									</div>
									<!-- / Single Counter -->

								</div>
							</div>


						</div>
					</div>
				</div>
			</div>
		</section></div></div>

  <!-- end carousel -->
  <!-- kategori produk -->
  </header>


<div class="row">
  <div class="col-md-12 py-4 text-center">
     <!-- Start -->
    
      <div class="container bg-secondary">
        <!-- kategori produk -->

       
        <div class="col-12 py-4 text-center">
              <p class="lead"><h2>Kategori Buku</h2></p>
             
          </div>
        <div class="row">
          <div class="mu-book-overview-area">
          @foreach($itemkategori as $kategori)
          <!-- kategori pertama -->
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <a href="{{ URL::to('kategori/'.$kategori->slug_kategori) }}">
                @if($kategori->foto != null)
                <img src="{{ \Storage::url($kategori->foto) }}" alt="{{ $kategori->nama_kategori }}" class="card-img-top">
                @else
                <img src="{{asset('images/bag.jpg') }}" alt="{{ $kategori->nama_kategori }}" class="card-img-top">
                @endif
              </a>
              <div class="card-body">
                <a href="{{ URL::to('kategori/'.$kategori->slug_kategori) }}" class="text-decoration-none">
                  <p class="card-text">{{ $kategori->nama_kategori }}</p>
                </a>
              </div>
            </div>
          </div>
          </div>
          @endforeach
        <!-- end kategori produk -->

     
    <!-- End -->

  </div>
</div>
</div>
</div>
                <!-- end kategori produk -->
                <!-- produk Promo-->



<div class="row">
  <div class="col-md-12 py-4 text-center">
     <!-- Start -->
    
      <div class="container bg-secondary">
       

       
        <div class="col-12 py-4 text-center">
              <p class="lead"><h2>Promo</h2></p>
             
          </div>
        <div class="row">
          <div class="mu-book-overview-area">
          @foreach($itempromo as $promo)
                <!-- produk pertama -->
                <div class="col-md-4">
                  <div class="card mb-4 shadow-sm">
                    <a href="{{ URL::to('produk/'.$promo->produk->slug_produk) }}">
                      @if($promo->produk->foto != null)
                      <img src="{{\Storage::url($promo->produk->foto) }}" alt="{{ $promo->produk->nama_produk }}" class="card-img-top">
                      @else
                      <img src="{{asset('images/bag.jpg') }}" alt="{{ $promo->produk->nama_produk }}" class="card-img-top">
                      @endif
                    </a>
                    <div class="card-body">
                      <a href="{{ URL::to('produk/'.$promo->produk->slug_produk) }}" class="text-decoration-none">
                        <p class="card-text">
                          {{ $promo->produk->nama_produk }}
                        </p>
                      </a>
                      <div class="row mt-4">
                        <div class="col">
                          <button class="btn btn-light">
                            <i class="far fa-heart"></i>
                          </button>
                        </div>
                        <div class="col-auto">
                          <p>
                            <del>Rp. {{ number_format($promo->harga_awal, 2) }}</del>
                            <br />
                            Rp. {{ number_format($promo->harga_akhir, 2) }}
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
        <!-- end kategori produk -->

     
    <!-- End -->

  </div>
</div>
</div>
</div>
</header>
                 

</main>
@endsection


