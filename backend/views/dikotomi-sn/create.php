<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\DikotomiSn */

$this->title = Yii::t('app', 'Create Dikotomi Sn');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Dikotomi Sns'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dikotomi-sn-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
