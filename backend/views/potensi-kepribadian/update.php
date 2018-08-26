<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PotensiKepribadian */

$this->title = Yii::t('app', 'Update Potensi Kepribadian: {nameAttribute}', [
    'nameAttribute' => $model->id_potensi,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Potensi Kepribadians'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_potensi, 'url' => ['view', 'id' => $model->id_potensi]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="potensi-kepribadian-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
