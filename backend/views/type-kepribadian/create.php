<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TypeKepribadian */

$this->title = Yii::t('app', 'Create Type Kepribadian');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Type Kepribadians'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="type-kepribadian-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
