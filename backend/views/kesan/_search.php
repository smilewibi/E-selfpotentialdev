<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\KesanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kesan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_kesan') ?>

    <?= $form->field($model, 'tgl_jam') ?>

    <?= $form->field($model, 'judul') ?>

    <?= $form->field($model, 'kesan') ?>

    <?= $form->field($model, 'id_user') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
