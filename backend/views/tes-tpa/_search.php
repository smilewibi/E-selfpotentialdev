<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TesTpaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tes-tpa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_tpa') ?>

    <?= $form->field($model, 'soal') ?>

    <?= $form->field($model, 'jwb_a') ?>

    <?= $form->field($model, 'jwb_b') ?>

    <?= $form->field($model, 'jwb_c') ?>

    <?php // echo $form->field($model, 'jwb_d') ?>

    <?php // echo $form->field($model, 'jwb_e') ?>

    <?php // echo $form->field($model, 'jwb_bnr') ?>

    <?php // echo $form->field($model, 'id_karir') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
