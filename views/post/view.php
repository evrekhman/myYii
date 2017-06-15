<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = $post1['/*введите столбец*/'];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
	<img src="<?=$post1['/*введите столбец*/']?>" alt="<?=$post1['/*введите столбец*/']?>" style="width:200px;height:300px;">
    <p>
       <?=$post1['/*введите столбец*/']?>
    </p>

   
</div>
