<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\hoadon */

$this->title = 'Update Hoadon: ' . $model->MaHD;
$this->params['breadcrumbs'][] = ['label' => 'Hoadons', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->MaHD, 'url' => ['view', 'id' => $model->MaHD]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hoadon-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
