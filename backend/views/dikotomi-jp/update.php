<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DikotomiJp */

$this->title = Yii::t('app', 'Update Dikotomi Jp: {nameAttribute}', [
    'nameAttribute' => $model->id_jp,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Dikotomi Jps'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_jp, 'url' => ['view', 'id' => $model->id_jp]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="dikotomi-jp-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
