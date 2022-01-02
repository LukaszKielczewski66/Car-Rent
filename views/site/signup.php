<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model app\models\SignupForm */

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

$this->title = 'Sign-up';
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="top-hero signup-hero">
    <div class="hero-shadow"></div>
    <p class="top-hero-text text-light"> <?= Html::encode($this->title) ?></p>
</section>
<section class="signup-form my-5 d-flex justify-content-center align-items-center">
    <div class="container py-5">
        <?php $form = ActiveForm::begin([
            'id' => 'signup-form',
            'layout' => 'horizontal',
            'fieldConfig' => [
                // 'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
                'labelOptions' => ['class' => 'col-lg-1 col-form-label'],
            ],
        ]); ?>

        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'email')->input('email') ?>

        <?= $form->field($model, 'password')->passwordInput() ?>

        <?= $form->field($model, 'password_repeat')->passwordInput() ?>


        <div class="form-group">
            <div class="offset-lg-1 col-lg-11">
                <?= Html::submitButton('Signup', ['class' => 'btn btn-primary btn-signup my-5', 'name' => 'signup-button']) ?>
            </div>
        </div>

        <?php ActiveForm::end(); ?>
        <p class="mt-5 text-center link">Already have account? <a href="login">Log in</a> here!</p>
    </div>
</section>