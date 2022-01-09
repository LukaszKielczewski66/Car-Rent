<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cars */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cars-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'car_img')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'car_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'year_of_production')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vehicle_mileage')->textInput() ?>

    <?= $form->field($model, 'fuel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'available')->textInput() ?>

    <?= $form->field($model, 'own_by')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
