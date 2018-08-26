<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Kepribadian */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kepribadian-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_type')->textInput() ?>

    <?= $form->field($model, 'nama_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sinopsis')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'kelebihan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'kekurangan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'motivasi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'id_bid_karir')->textInput() ?>

    <?= $form->field($model, 'id_user')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
