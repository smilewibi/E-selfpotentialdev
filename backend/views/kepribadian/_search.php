<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\KepribadianSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kepribadian-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_kepribadian') ?>

    <?= $form->field($model, 'id_type') ?>

    <?= $form->field($model, 'nama_type') ?>

    <?= $form->field($model, 'sinopsis') ?>

    <?= $form->field($model, 'kelebihan') ?>

    <?php // echo $form->field($model, 'kekurangan') ?>

    <?php // echo $form->field($model, 'motivasi') ?>

    <?php // echo $form->field($model, 'id_bid_karir') ?>

    <?php // echo $form->field($model, 'id_user') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
