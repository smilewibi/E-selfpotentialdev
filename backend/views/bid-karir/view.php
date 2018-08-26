<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\BidKarir */

$this->title = $model->id_bid_karir;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Bid Karirs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bid-karir-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id_bid_karir], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id_bid_karir], [
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
            'id_bid_karir',
            'nm_bid',
        ],
    ]) ?>

</div>
