<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\DikotomiTf */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dikotomi-tf-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_tes')->textInput() ?>

    <?= $form->field($model, 'tot_jwb_a')->textInput() ?>

    <?= $form->field($model, 'tot_jwb_b')->textInput() ?>

    <?= $form->field($model, 'id_user')->textInput() ?>

    <?= $form->field($model, 'id_kategori')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
