<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Kesan */

$this->title = Yii::t('app', 'Create Kesan');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Kesans'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kesan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
