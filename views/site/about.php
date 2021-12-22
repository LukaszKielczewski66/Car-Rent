<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;

?>

<main>
    <section class="top-hero aboutus-hero">
        <div class="hero-shadow"></div>
        <p class="top-hero-text text-light">About us</p>
    </section>
    <section class="aboutus-top p-5">
        <div class="row">
            <div class="container py-5">
                <p class="display-3"><?php echo Yii::$app->name ?></p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis quos sapiente natus veniam aperiam, at dolore? Lorem ipsum dolor sit amet consectetur adipisicing elit. In, repellat! Lorem ipsum dolor sit amet.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi nisi pariatur, provident blanditiis architecto veritatis praesentium nulla similique repellat esse?</p>
            </div>
        </div>
    </section>
    <section class="border-top border-bottom aboutus-info aboutus-shadow">
        <div class="container">
            <div class="row m-0 justify-content-center">
                <div class="col-lg-3 aboutus-text aboutus-text-left">
                    <h3>our passion</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, similique dicta vitae velit
                        minima delectus impedit aspernatur eaque natus quae adipisci corrupti quas rerum molestias
                        perferendis maxime optio sapiente eligendi.</p>
                </div>

                <div class="d-lg-none col aboutus-img"></div>
                <div class="d-none d-lg-block col-lg-4 aboutus-img"></div>

                <div class="col-lg-3 aboutus-text aboutus-text-right">
                    <h3>our goals</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, similique dicta vitae velit
                        minima delectus impedit aspernatur eaque natus quae adipisci corrupti quas rerum molestias
                        perferendis maxime optio sapiente eligendi.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="aboutus-bottom py-5">
        <div class="container py-5 text-light">
            <div class="row row-cols-md-2 row-cols-lg-3">
                <div class="col-md-6 col-lg-4">
                    <div class="card p-4 mb-3 bg-dark">
                        <div class="row no-gutters">
                            <div class="col-4 d-flex justify-content-center align-items-center">
                                <i class="far fa-building"></i>
                            </div>
                            <div class="col-8">
                                <div class="card-body">
                                    <h3 class="card-title">Card title</h3>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Quae,
                                        cupiditate.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card p-4 mb-3 bg-primary">
                        <div class="row no-gutters">
                            <div class="col-4 d-flex justify-content-center align-items-center">
                                <i class="fas fa-trophy"></i>
                            </div>
                            <div class="col-8">
                                <div class="card-body">
                                    <h3 class="card-title">Card title</h3>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Quae,
                                        cupiditate.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card p-4 mb-3 bg-dark">
                        <div class="row no-gutters">
                            <div class="col-4 d-flex justify-content-center align-items-center">
                                <i class="fas fa-tags"></i>
                            </div>
                            <div class="col-8">
                                <div class="card-body">
                                    <h3 class="card-title">Card title</h3>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Quae,
                                        cupiditate.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card p-4 mb-3 bg-primary">
                        <div class="row no-gutters">
                            <div class="col-4 d-flex justify-content-center align-items-center">
                                <i class="fas fa-gem"></i>
                            </div>
                            <div class="col-8">
                                <div class="card-body">
                                    <h3 class="card-title">Card title</h3>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Quae,
                                        cupiditate.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card p-4 mb-3 bg-dark">
                        <div class="row no-gutters">
                            <div class="col-4 d-flex justify-content-center align-items-center">
                                <i class="fas fa-credit-card"></i>
                            </div>
                            <div class="col-8">
                                <div class="card-body">
                                    <h3 class="card-title">Card title</h3>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Quae,
                                        cupiditate.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card p-4 mb-3 bg-primary">
                        <div class="row no-gutters">
                            <div class="col-4 d-flex justify-content-center align-items-center">
                                <i class="far fa-thumbs-up"></i>
                            </div>
                            <div class="col-8">
                                <div class="card-body">
                                    <h3 class="card-title">Card title</h3>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Quae,
                                        cupiditate.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>