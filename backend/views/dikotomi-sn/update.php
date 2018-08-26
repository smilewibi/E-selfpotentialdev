<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DikotomiSn */

$this->title = Yii::t('app', 'Update Dikotomi Sn: {nameAttribute}', [
    'nameAttribute' => $model->id_sn,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Dikotomi Sns'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_sn, 'url' => ['view', 'id' => $model->id_sn]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="dikotomi-sn-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
