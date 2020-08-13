<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Benchmarks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="benchmark-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Benchmark', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'framework',
            'nilai',
            'penggunaan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
