<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Searchkhachhang */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="khachhang-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'MaKH') ?>

    <?= $form->field($model, 'TenKH') ?>

    <?= $form->field($model, 'DiaChi') ?>

    <?= $form->field($model, 'SoDT') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
