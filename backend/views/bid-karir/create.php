<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\BidKarir */

$this->title = Yii::t('app', 'Tambah Bidang Karir');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Bid Karirs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bid-karir-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
