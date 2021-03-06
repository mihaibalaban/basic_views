<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Country3Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Focus';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="country3-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Creaza rezervare', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Nume',
            'Prenume',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
