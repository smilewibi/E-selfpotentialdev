<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Karir */

$this->title = Yii::t('app', 'Update Karir: {nameAttribute}', [
    'nameAttribute' => $model->id_karir,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Karirs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_karir, 'url' => ['view', 'id' => $model->id_karir]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="karir-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
