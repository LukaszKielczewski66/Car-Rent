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
<main>
    <section class="home-brand py-5">
        <p class="display-2 text-center pt-5 px-3 font-weight-bold"><?php echo Yii::$app->name ?></p>
        <div class="container py-5">
            <div class="row m-0 align-items-center">
                <div class="col-md-6">
                    <p class="display-4 text-center font-weight-bold">Welcome to our website!</p>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab eveniet consequatur temporibus expedita atque quasi minus neque delectus praesentium. In fugiat labore, similique dignissimos dolores id quisquam impedit omnis excepturi.</p>
                </div>
                <div class="col-md-6 home-car">
                    <img src="../img/home-bmw.png" alt="bmw" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <section class="home-passion">
        <div class="hero-shadow"></div>
        <div class="row m-0 h-100 align-items-center text-light">
            <div class="col">
                <div class="container p-5">
                    <p class="display-4">Cars are our passion!</p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident exercitationem consequatur, ullam veritatis veniam omnis?</p>
                </div>
            </div>
        </div>
    </section>
    <section class="home-boxes">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-4 home-box mb-5 mb-md-0">
                    <i class="fas fa-tools mb-4"></i>
                    <h3>Lorem, ipsum dolor.</h3>
                    <p class="m-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis, aspernatur?
                    </p>
                </div>
                <div class="col-md-4 home-box mb-5 mb-md-0">
                    <i class="fas fa-fire mb-4"></i>
                    <h3>Lorem, ipsum dolor.</h3>
                    <p class="m-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis, aspernatur?
                    </p>
                </div>
                <div class="col-md-4 home-box mb-5 mb-md-0">
                    <i class="fas fa-cogs mb-4"></i>
                    <h3>Lorem, ipsum dolor.</h3>
                    <p class="m-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis, aspernatur?
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="home-end">
        <div class="container pb-5">
            <div class="jumbotron text-center">
                <p class="display-4">Lorem, ipsum dolor.</p>
                <hr class="my-4">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum provident illum cum quo hic
                    assumenda magnam esse modi odit dolorem!</p>
            </div>
            <p class="px-4 pt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, aliquid esse!
                Inventore repellat saepe deleniti harum id nesciunt nam. Nostrum minus quibusdam voluptate deleniti
                iusto error officia eaque omnis consectetur!</p>
        </div>
    </section>
</main>