<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Kategori;

/* @var $this yii\web\View */
/* @var $model backend\models\Tesmbti */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tesmbti-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Soal')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Jwb_a')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Jwb_b')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_kategori')->DropdownList(
		Arrayhelper::map(Kategori::find()->all(),'id_kategori','kategori'),
		['prompt'=>'Pilih Kategori']
	) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
