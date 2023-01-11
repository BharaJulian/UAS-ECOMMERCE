@extends('layouts.template')
@section('content')

<header class="container bg-warning text-white bg-gradient" >


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
</header>
<script src="js/bootstrap.bundle.js"></script>
@endsection



