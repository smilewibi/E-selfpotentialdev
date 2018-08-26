<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\BidKarir */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bid-karir-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nm_bid')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
