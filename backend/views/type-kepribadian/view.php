<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\TypeKepribadian */

$this->title = $model->id_type;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Type Kepribadians'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="type-kepribadian-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id_type], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id_type], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_type',
            'id_ei',
            'type_ei',
            'id_sn',
            'type_sn',
            'id_tf',
            'type_tf',
            'id_jp',
            'type_jp',
            'id_user',
            'id_tes',
        ],
    ]) ?>

</div>
