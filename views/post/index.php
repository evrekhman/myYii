<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Сайт который Лучший!</h1>

        <p class="lead">Что бы стать лучшим, тренируйся с лучшими.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.ifind.su">Ifind.su</a></p>
    </div>

    <div class="body-content">

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
</div>
