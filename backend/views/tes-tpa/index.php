<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TesTpaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Tes Tpas');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tes-tpa-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Tes Tpa'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_tpa',
            'soal:ntext',
            'jwb_a:ntext',
            'jwb_b:ntext',
            'jwb_c:ntext',
            //'jwb_d:ntext',
            //'jwb_e:ntext',
            //'jwb_bnr:ntext',
            //'id_karir',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
