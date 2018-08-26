<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\PotensiKepribadian */

$this->title = Yii::t('app', 'Create Potensi Kepribadian');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Potensi Kepribadians'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="potensi-kepribadian-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
