<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\TesTpa */

$this->title = $model->id_tpa;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tes Tpas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tes-tpa-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id_tpa], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id_tpa], [
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
            'id_tpa',
            'soal:ntext',
            'jwb_a:ntext',
            'jwb_b:ntext',
            'jwb_c:ntext',
            'jwb_d:ntext',
            'jwb_e:ntext',
            'jwb_bnr:ntext',
            'id_karir',
        ],
    ]) ?>

</div>
