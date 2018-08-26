<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Kepribadian */

$this->title = Yii::t('app', 'Update Kepribadian: {nameAttribute}', [
    'nameAttribute' => $model->id_kepribadian,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Kepribadians'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_kepribadian, 'url' => ['view', 'id' => $model->id_kepribadian]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="kepribadian-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
