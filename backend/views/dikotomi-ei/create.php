<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\DikotomiEi */

$this->title = Yii::t('app', 'Create Dikotomi Ei');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Dikotomi Eis'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dikotomi-ei-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
