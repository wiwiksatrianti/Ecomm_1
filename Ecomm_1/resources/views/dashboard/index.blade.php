@extends('layout.master')

@section('content')

@include('layout.header')

<div class="dashboard container">

    <div class="row">
        <div class="col-lg-2 bg-light">
            <ul class="list-group-flush p-2 pt-4">
                <li class="list-group-item bg-warning"><i class="fas fa-list mr-2"></i>Kategori Produk</li>
                <li class="list-group-item"><i class="fas fa-angel-right"></i> Cleanser</li>
                <li class="list-group-item"><i class="fas fa-angel-right"></i> Moisturizer</li>
                <li class="list-group-item"><i class="fas fa-angel-right"></i> Serum & Toner</li>
                <li class="list-group-item"><i class="fas fa-angel-right"></i> Sunscreen</li>
                <li class="list-group-item"><i class="fas fa-angel-right"></i> Mask & Scrub</li>
                <li class="list-group-item"><i class="fas fa-angel-right"></i> Lip Care</li>
                <li class="list-group-item"><i class="fas fa-angel-right"></i> Eyes Make Up</li>
                <li class="list-group-item"><i class="fas fa-angel-right"></i> Face Make Up</li>
                <li class="list-group-item"><i class="fas fa-angel-right"></i> Lips Make Up</li>
            </ul>
        </div>
    
        <div class="col-lg-10">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="img/slideA.png" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="img/slideB.png" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="img/slideC.png" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
            </div>
            <h5 class="font-weight-bold pt-5">Popular Produk</h5>
            <div class="row">

                <div class="card me-3" style="width: 14rem;">
                    <img src="img/pLip1.png" class="card-img-top " alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Creamy Tint</h5>
                      <p class="card-text">Order beda varian dalam satu transaks</p>
                      <a href="#" class="btn btn-primary">Detail</a>
                      <a href="#" class="btn btn-warning bi bi-cart-plus"></a>
                    </div>
                </div>
                <div class="card me-3" style="width: 14rem;">
                    <img src="img/pLip1.png" class="card-img-top " alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Creamy Tint</h5>
                      <p class="card-text">Order beda varian dalam satu transaks</p>
                      <a href="#" class="btn btn-primary">Detail</a>
                      <a href="#" class="btn btn-warning bi bi-cart-plus"></a>
                    </div>
                </div>
                <div class="card me-3" style="width: 14rem;">
                    <img src="img/pLip1.png" class="card-img-top " alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Creamy Tint</h5>
                      <p class="card-text">Order beda varian dalam satu transaks</p>
                      <a href="#" class="btn btn-primary">Detail</a>
                      <a href="#" class="btn btn-warning bi bi-cart-plus"></a>
                    </div>
                </div>
                <div class="card" style="width: 14rem;">
                    <img src="img/pLip1.png" class="card-img-top " alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Creamy Tint</h5>
                      <p class="card-text">Order beda varian dalam satu transaks</p>
                      <a href="#" class="btn btn-primary">Detail</a>
                      <a href="#" class="btn btn-warning bi bi-cart-plus"></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@include('layout.footer')

@endsection