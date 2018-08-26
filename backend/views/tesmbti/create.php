<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Tesmbti */

$this->title = Yii::t('app', 'Create Tesmbti');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tesmbtis'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tesmbti-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
