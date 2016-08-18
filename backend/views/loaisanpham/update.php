<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\loaisanpham */

$this->title = 'Update Loaisanpham: ' . $model->MaLoaiSP;
$this->params['breadcrumbs'][] = ['label' => 'Loaisanphams', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->MaLoaiSP, 'url' => ['view', 'id' => $model->MaLoaiSP]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="loaisanpham-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
