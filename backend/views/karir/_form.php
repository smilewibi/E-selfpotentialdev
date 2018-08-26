<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\BidKarir;

/* @var $this yii\web\View */
/* @var $model backend\models\Karir */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="karir-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nm_karir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_bid_karir')->DropdownList(
		Arrayhelper::map(BidKarir::find()->all(),'id_bid_karir','nm_bid'),
		['prompt'=>'Pilih Bidang']
	) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
