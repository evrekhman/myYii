<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\controllers\PostController;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
	<?php $var = PostController::category();?>
	<?php foreach($var as $value):?>
	
	<div class="btn btn-link logout"><a  href="<?= yii\helpers\Url::to(['post/category', 'id'=>$value->id, 'name'=>$value->okon])?>"><?=$value['name']?></a></div>
	<?php endforeach?>
	<div class="input-group">
    <?php
		NavBar::begin([
			brandLabel => 'Текстовое поле',
		]);
		//NavBar::end();
		
		ActiveForm::begin(
		[
			'action'=>['post/search'],
			'method'=>'get',
			'options'=>[
				'class'=>'navbar-form navbar-right'
				]
			
		]
		);
		
		
		echo Html::input(
			'type:text',
			'search',
			'',
			[
				'placeholder' => 'Найти....',
				'class' => 'form-control'
			]
		);
		?>
			<span class="input-group-btn">
		<?
		echo Html::submitButton(
			'<span class="glyphicon glyphicon-search"></span>',
			
			[
				
				'class' => 'btn btn-success'
			]
		);
		
		ActiveForm::end();
		NavBar::end();
    ?>
	</span>
	</div>

    <div class="container">
	
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
