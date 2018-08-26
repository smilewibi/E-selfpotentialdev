<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TesTpa */

$this->title = Yii::t('app', 'Create Tes Tpa');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tes Tpas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tes-tpa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
