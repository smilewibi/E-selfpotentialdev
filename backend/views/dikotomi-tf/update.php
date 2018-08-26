<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DikotomiTf */

$this->title = Yii::t('app', 'Update Dikotomi Tf: {nameAttribute}', [
    'nameAttribute' => $model->id_tf,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Dikotomi Tfs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_tf, 'url' => ['view', 'id' => $model->id_tf]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="dikotomi-tf-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
