<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Benchmark */

$this->title = 'Create Benchmark';
$this->params['breadcrumbs'][] = ['label' => 'Benchmarks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="benchmark-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
