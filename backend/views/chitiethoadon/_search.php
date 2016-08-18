<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Searchchitiethoadon */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="chitiethoadon-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'MaSP') ?>

    <?= $form->field($model, 'MaHD') ?>

    <?= $form->field($model, 'SoLuongMua') ?>

    <?= $form->field($model, 'DonGiaBan') ?>

    <?= $form->field($model, 'HoaDon_MaHD') ?>

    <?php // echo $form->field($model, 'SanPham_MaSP') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
