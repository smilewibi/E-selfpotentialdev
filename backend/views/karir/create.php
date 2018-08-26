<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Karir */

$this->title = Yii::t('app', 'Create Karir');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Karirs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="karir-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
