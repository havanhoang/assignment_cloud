<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\loaisanpham */

$this->title = $model->MaLoaiSP;
$this->params['breadcrumbs'][] = ['label' => 'Loaisanphams', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="loaisanpham-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->MaLoaiSP], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->MaLoaiSP], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'MaLoaiSP',
            'TenLoaiSP',
        ],
    ]) ?>

</div>
