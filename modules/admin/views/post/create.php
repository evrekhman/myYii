<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\New3AllTotal */

$this->title = 'Create New3 All Total';
$this->params['breadcrumbs'][] = ['label' => 'New3 All Totals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="new3-all-total-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
