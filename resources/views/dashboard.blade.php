@extends('layouts/main_second')
@section('title', 'Dashboard')
@section('artikel')
    {{-- Carosul Bar --}}
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" img src="https://i.ibb.co.com/DVd7tyc/1.png" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second Slide Label</h5>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" img src="https://i.ibb.co.com/DDY1gvP/2.png" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second Slide Label</h5>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" img src="https://i.ibb.co.com/GdjmpgR/3.png" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second Slide Label</h5>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" img src="https://i.ibb.co.com/vzqq8qn/4.png" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second Slide Label</h5>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" img src="https://i.ibb.co.com/nsg6MRG/5.png" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second Slide Label</h5>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" img src="https://i.ibb.co.com/ZSfxcrh/6.png" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second Slide Label</h5>
                    <p>Lorem ipsum dolor sit amet.</p>
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

    {{-- Jumbotron --}}
    <div class="jumbotron">
        <h1 class="display-4">Selamat Datang di Royale Bread</h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for
            calling extra attention to featured content or information.</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the
            larger container.</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="/Produk" role="button">Cek Catalog Produk</a>
        </p>
    </div>
@endsection
