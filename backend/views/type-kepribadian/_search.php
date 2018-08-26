<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TypeKepribadianSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="type-kepribadian-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_type') ?>

    <?= $form->field($model, 'id_ei') ?>

    <?= $form->field($model, 'type_ei') ?>

    <?= $form->field($model, 'id_sn') ?>

    <?= $form->field($model, 'type_sn') ?>

    <?php // echo $form->field($model, 'id_tf') ?>

    <?php // echo $form->field($model, 'type_tf') ?>

    <?php // echo $form->field($model, 'id_jp') ?>

    <?php // echo $form->field($model, 'type_jp') ?>

    <?php // echo $form->field($model, 'id_user') ?>

    <?php // echo $form->field($model, 'id_tes') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
