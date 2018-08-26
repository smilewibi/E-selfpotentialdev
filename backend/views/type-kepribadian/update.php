<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TypeKepribadian */

$this->title = Yii::t('app', 'Update Type Kepribadian: {nameAttribute}', [
    'nameAttribute' => $model->id_type,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Type Kepribadians'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_type, 'url' => ['view', 'id' => $model->id_type]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="type-kepribadian-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
