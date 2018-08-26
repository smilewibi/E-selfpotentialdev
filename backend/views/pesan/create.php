<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Pesan */

$this->title = Yii::t('app', 'Create Pesan');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pesans'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pesan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
