
<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = $post2['/*введите столбец*/'];
$this->params['/*введите столбец*/'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
	
    <p>
       <?=$post2['/*введите столбец*/']?>
    </p>
	<div class="row">
			<?php foreach($posts as $value):?>
		
			  <div class="col-sm-6 col-md-4">
				<div class="thumbnail">
				  <img src="<?=$value['/*введите столбец*/']?>" alt="<?=$value['/*введите столбец*/']?>" style="width:200px;height:300px;">
				  <div class="caption">
					<h3><?=$value['/*введите столбец*/']?></h3>
					<?php $rest = substr($value['/*введите столбец*/'], 0, 150);?>
					<p><?=$rest?></p>
					<p><a href="<?= yii\helpers\Url::to(['post/view', 'id'=>$value->id])?>" class="btn btn-primary" role="button">перейти</a> </p>
				  </div>
				</div>
			  </div>
			
			
            
            <?php endforeach?>
        </div>
		<?= \yii\widgets\LinkPager::widget(['pagination' => $pages]);?>
</div>
