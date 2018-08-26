<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\DikotomiJp */

$this->title = Yii::t('app', 'Create Dikotomi Jp');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Dikotomi Jps'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dikotomi-jp-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
