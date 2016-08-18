<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Searchsanpham */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sanpham-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'MaSP') ?>

    <?= $form->field($model, 'TenSP') ?>

    <?= $form->field($model, 'SoLuong') ?>

    <?= $form->field($model, 'MoTa') ?>

    <?= $form->field($model, 'MaLoaiSP') ?>

    <?php // echo $form->field($model, 'LoaiSanPham_MaLoaiSP') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
