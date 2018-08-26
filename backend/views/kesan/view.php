<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Kesan */

$this->title = $model->id_kesan;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Kesans'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kesan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id_kesan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id_kesan], [
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
            'id_kesan',
            'tgl_jam',
            'judul',
            'kesan:ntext',
            'id_user',
        ],
    ]) ?>

</div>
