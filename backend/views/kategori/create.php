<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Kategori */

$this->title = Yii::t('app', 'Create Kategori');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Kategoris'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kategori-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
