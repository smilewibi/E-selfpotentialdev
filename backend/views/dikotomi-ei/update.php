<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DikotomiEi */

$this->title = Yii::t('app', 'Update Dikotomi Ei: {nameAttribute}', [
    'nameAttribute' => $model->id_ei,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Dikotomi Eis'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_ei, 'url' => ['view', 'id' => $model->id_ei]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="dikotomi-ei-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
