<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\DikotomiTf */

$this->title = Yii::t('app', 'Create Dikotomi Tf');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Dikotomi Tfs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dikotomi-tf-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
