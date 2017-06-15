<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\New3AllTotal */

$this->title = 'Update New3 All Total: ' . $model->id_all;
$this->params['breadcrumbs'][] = ['label' => '/*введите имя таблицы*/', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_all, 'url' => ['view', 'id' => $model->id_all]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="new3-all-total-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
