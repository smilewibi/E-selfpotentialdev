<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TesmbtiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Tesmbtis');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tesmbti-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Tesmbti'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_tes',
            'Soal:ntext',
            'Jwb_a',
            'Jwb_b',
            'kategori.kategori',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
