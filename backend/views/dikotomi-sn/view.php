<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\DikotomiSn */

$this->title = $model->id_sn;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Dikotomi Sns'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dikotomi-sn-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id_sn], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id_sn], [
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
            'id_sn',
            'id_tes',
            'tot_jwb_a',
            'tot_jwb_b',
            'id_user',
            'id_kategori',
        ],
    ]) ?>

</div>
