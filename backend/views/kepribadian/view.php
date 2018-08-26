<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Kepribadian */

$this->title = $model->id_kepribadian;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Kepribadians'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kepribadian-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id_kepribadian], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id_kepribadian], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_kepribadian',
            'id_type',
            'nama_type',
            'sinopsis:ntext',
            'kelebihan:ntext',
            'kekurangan:ntext',
            'motivasi:ntext',
            'id_bid_karir',
            'id_user',
        ],
    ]) ?>

</div>
