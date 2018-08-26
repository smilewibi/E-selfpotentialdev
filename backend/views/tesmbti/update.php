<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Tesmbti */

$this->title = Yii::t('app', 'Update Tesmbti: {nameAttribute}', [
    'nameAttribute' => $model->id_tes,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tesmbtis'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_tes, 'url' => ['view', 'id' => $model->id_tes]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="tesmbti-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
