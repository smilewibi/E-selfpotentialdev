<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DikotomiEiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Dikotomi Eis');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dikotomi-ei-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Dikotomi Ei'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_ei',
            'id_tes',
            'tot_jwb_a',
            'tot_jwb_b',
            'id_user',
            //'id_kategori',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
