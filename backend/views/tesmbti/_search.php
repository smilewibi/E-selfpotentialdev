<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TesmbtiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tesmbti-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_tes') ?>

    <?= $form->field($model, 'Soal') ?>

    <?= $form->field($model, 'Jwb_a') ?>

    <?= $form->field($model, 'Jwb_b') ?>

    <?= $form->field($model, 'id_kategori') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
