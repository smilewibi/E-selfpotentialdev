<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TypeKepribadian */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="type-kepribadian-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_ei')->textInput() ?>

    <?= $form->field($model, 'type_ei')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_sn')->textInput() ?>

    <?= $form->field($model, 'type_sn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_tf')->textInput() ?>

    <?= $form->field($model, 'type_tf')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_jp')->textInput() ?>

    <?= $form->field($model, 'type_jp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_user')->textInput() ?>

    <?= $form->field($model, 'id_tes')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
