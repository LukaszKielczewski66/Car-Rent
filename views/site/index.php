<?php

/* @var $this yii\web\View */

$this->title = 'Home';
?>
<header>
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner text-light text-center">
            <div class="carousel-item carousel-img-one active">
                <div class="carousel-text h-100 p-5 d-flex flex-column justify-content-end justify-content-md-center align-items-center">
                    <div class="hero-shadow"></div>
                    <p class="display-3">Lorem, ipsum dolor.</p>
                    <p class="d-none d-sm-block">Lorem, ipsum dolor sit amet consectetur adipisicing.</p>
                </div>
            </div>
            <div class="carousel-item carousel-img-two">
                <div class="carousel-text h-100 p-5 d-flex flex-column justify-content-end justify-content-md-center align-items-center">
                    <div class="hero-shadow"></div>
                    <p class="display-3">Lorem, ipsum dolor.</p>
                    <p class="d-none d-sm-block">Lorem, ipsum dolor sit amet consectetur adipisicing.</p>
                </div>
            </div>
            <div class="carousel-item carousel-img-three">
                <div class="carousel-text h-100 p-5 d-flex flex-column justify-content-end justify-content-md-center align-items-center">
                    <div class="hero-shadow"></div>
                    <p class="display-3">Lorem, ipsum dolor.</p>
                    <p class="d-none d-sm-block">Lorem, ipsum dolor sit amet consectetur adipisicing.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</header>