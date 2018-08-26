<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TesTpa */

$this->title = Yii::t('app', 'Update Tes Tpa: {nameAttribute}', [
    'nameAttribute' => $model->id_tpa,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tes Tpas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_tpa, 'url' => ['view', 'id' => $model->id_tpa]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="tes-tpa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
