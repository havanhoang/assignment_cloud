<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\chitiethoadon */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="chitiethoadon-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'MaSP')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'MaHD')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SoLuongMua')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DonGiaBan')->textInput() ?>

    <?= $form->field($model, 'HoaDon_MaHD')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SanPham_MaSP')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
