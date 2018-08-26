<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TesTpa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tes-tpa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'soal')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'jwb_a')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'jwb_b')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'jwb_c')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'jwb_d')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'jwb_e')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'jwb_bnr')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'id_karir')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
