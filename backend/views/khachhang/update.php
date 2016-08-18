<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\khachhang */

$this->title = 'Update Khachhang: ' . $model->MaKH;
$this->params['breadcrumbs'][] = ['label' => 'Khachhangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->MaKH, 'url' => ['view', 'id' => $model->MaKH]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="khachhang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
