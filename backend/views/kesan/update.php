<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Kesan */

$this->title = Yii::t('app', 'Update Kesan: {nameAttribute}', [
    'nameAttribute' => $model->id_kesan,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Kesans'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_kesan, 'url' => ['view', 'id' => $model->id_kesan]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="kesan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
