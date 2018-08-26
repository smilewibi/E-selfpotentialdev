<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TypeKepribadianSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Type Kepribadians');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="type-kepribadian-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Type Kepribadian'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_type',
            'id_ei',
            'type_ei',
            'id_sn',
            'type_sn',
            //'id_tf',
            //'type_tf',
            //'id_jp',
            //'type_jp',
            //'id_user',
            //'id_tes',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
