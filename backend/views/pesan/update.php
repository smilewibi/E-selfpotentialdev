<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Pesan */

$this->title = Yii::t('app', 'Update Pesan: {nameAttribute}', [
    'nameAttribute' => $model->id_pesan,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pesans'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pesan, 'url' => ['view', 'id' => $model->id_pesan]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="pesan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
