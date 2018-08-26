<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
//use common\widget\DatePicker;

$this->title = 'Daftar Baru';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Daftar Gratis:</p>

    <div class="row">
        <div class="col-lg-6">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
				<?= $form->field($model, 'nama_depan') ?>
				<?= $form->field($model, 'nama_belakang') ?>
				<?= $form->field($model, 'tempat_lahir') ?>
				<?= $form->field($model, 'tanggal_lahir') ?>
				
				<?= $form->field($model, 'golongan_darah')->dropDownList(['tidak tahu'=>'tidak tahu',
																		'O'=>'O',
																		'A'=>'A',
																		'B'=>'B',
																		'AB'=>'AB',]) ?>
				<?= $form->field($model, 'telepon') ?>
		</div>
		<div class="col-lg-6">
				<?= $form->field($model, 'alamat')->textArea(['rows'=>8]) ?>
                <?= $form->field($model, 'email') ?>
                <?= $form->field($model, 'password')->passwordInput() ?>
				<?= $form->field($model, 'verifyCode')->widget(Captcha::className(), ['template' => '<div class="row"><div class="col-lg-3">{image}</div>
				<div class="col-lg-6">{input}</div></div>',]) ?>
				
                <div class="form-group">
                    <?= Html::submitButton('Daftar', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
