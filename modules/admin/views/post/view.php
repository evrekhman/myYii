<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\New3AllTotal */

$this->title = $model->id_all;
$this->params['breadcrumbs'][] = ['label' => '/*введите имя таблицы*/', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="new3-all-total-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_all], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_all], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            '/*введите столбец*/',
            '/*введите столбец*/',
            
        ],
    ]) ?>

</div>
