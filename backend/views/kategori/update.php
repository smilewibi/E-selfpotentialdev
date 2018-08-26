<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Kategori */

$this->title = Yii::t('app', 'Update Kategori: {nameAttribute}', [
    'nameAttribute' => $model->id_kategori,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Kategoris'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_kategori, 'url' => ['view', 'id' => $model->id_kategori]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="kategori-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
