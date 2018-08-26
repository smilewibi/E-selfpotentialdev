<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\PotensiKepribadian */

$this->title = $model->id_potensi;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Potensi Kepribadians'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="potensi-kepribadian-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id_potensi], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id_potensi], [
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
            'id_potensi',
            'id_kepribadian',
            'id_tes_tpa',
            'id_user',
        ],
    ]) ?>

</div>
