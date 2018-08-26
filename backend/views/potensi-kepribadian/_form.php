<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PotensiKepribadian */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="potensi-kepribadian-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_kepribadian')->textInput() ?>

    <?= $form->field($model, 'id_tes_tpa')->textInput() ?>

    <?= $form->field($model, 'id_user')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
