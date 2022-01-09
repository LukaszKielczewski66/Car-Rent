<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CarsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cars-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'car_img') ?>

    <?= $form->field($model, 'car_name') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'year_of_production') ?>

    <?php // echo $form->field($model, 'vehicle_mileage') ?>

    <?php // echo $form->field($model, 'fuel') ?>

    <?php // echo $form->field($model, 'available') ?>

    <?php // echo $form->field($model, 'own_by') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
