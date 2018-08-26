<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-lg-6">
			<div class="form-wrapper">
				<div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">
					<div class="panel panel-skin">
						<div class="panel-heading">
							<h3 class="panel-title">
								<span class="fa fa-pencil-square-o"></span> 
									Masuk dan analisa dirimu 
								<small>
									(Gratis!)
								</small>
							</h3>
						</div>
					<div class="panel-body">
						<?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

						<?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

						<?= $form->field($model, 'password')->passwordInput() ?>

						<?= $form->field($model, 'rememberMe')->checkbox() ?>

						<div style="color:#999;margin:1em 0">
						If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
						</div>

						<div class="form-group">
							<?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
						</div>

						<?php ActiveForm::end(); ?>
					</div>
					</div>
				</div>
			</div>
		</div>
			<div class="col-lg-6">
					<div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
					<h2 class="h-ultra">E-Self Potential Dev.</h2>
					</div>
					<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
					<h4 class="h-light">
						"Pilihlah <span class="color">pekerjaan yang anda cintai</span> 
						maka anda tidak akan merasa bekerja sepanjang hidup"
					</h4>
					</div>
						<div class="well well-trans">
						<div class="wow fadeInRight" data-wow-delay="0.1s">

						<ul class="lead-list">
							<li>
								<span class="fa fa-check fa-2x icon-success"></span>
								<span class="list">
									<strong>
										Mayers-Briggs Type Indicator (MBTI)
									</strong><br />
									Sebuah Tes untuk menemukan bakat anda
								</span>
							</li>
							<li>
								<span class="fa fa-check fa-2x icon-success"></span>
								<span class="list">
									<strong>
										Edward Personality Preference Schedule (EPPS) 
									</strong><br />
									Sebuah Tes untuk melihat tingkat potensi kinerja anda
									</span>
							</li>
							<li>
								<span class="fa fa-check fa-2x icon-success"></span>
								<span class="list">
									<strong>
										Tes Potensi Akademis (TPA)
									</strong><br />
									Sebuah Tes untuk melihat tingkat potensi kecerdasan <br>
									akademis anda
								</span>
							</li>
						</ul>
						</div>
						</div>
					</div>
	</div>
</div>
