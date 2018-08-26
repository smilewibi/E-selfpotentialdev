<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\BidKarir */

$this->title = Yii::t('app', 'Update Bid Karir: {nameAttribute}', [
    'nameAttribute' => $model->id_bid_karir,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Bid Karirs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_bid_karir, 'url' => ['view', 'id' => $model->id_bid_karir]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="bid-karir-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
