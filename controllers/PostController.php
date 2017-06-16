<?php

namespace app\controllers;

use app\controllers;
use app\models\Category;
use app\models\Mat;
//use \yii\data\Pagination;
use Yii;

class PostController extends AppController{
	/*
	*actionIndex выводит главную страницу
	*
	*
	*/
	public function actionIndex()
	{
		
		$query = Mat::find()->select(/*введите поля какие вам нужны*/)->where(/*введите условия*/)->orderBy('id DESC');
		$pages = new \yii\data\Pagination(['totalCount' => $query->count(), 'pageSize' => 10, 'pageSizeParam' => false, 'forcePageParam' => false]);
		$posts = $query->offset($pages->offset)->limit($pages->limit)->all();
		return $this->render('index',compact('posts','pages'));
		
	}
	
	/*
	*actionView выводит Индивидуальную страницу
	*
	*
	*/
	public function actionView()
	{
		$id = \Yii::$app->request->get('id');
		$post1 = Mat::findOne([
		'id'=>$id
		]);
		if($post1)
		{
			return $this->render('view', compact('post1'));
		}
		
		
	}
	
	/*
	*actionSearch выводит страницу поиска
	*
	*
	*/
	public function actionSearch($search = null)
	{
		
		$query = Mat::find()->select(/*введите поля какие вам нужны*/)->andWhere([/*введите условия*/])->orderBy('id DESC');
		$pages = new \yii\data\Pagination(['totalCount' => $query->count(), 'pageSize' => 10, 'pageSizeParam' => false, 'forcePageParam' => false]);
		$posts = $query->offset($pages->offset)->limit($pages->limit)->all();
		return $this->render(
			'search',compact('posts', 'pages')
		);
		
		
	}
	
	/*
	*actionCategory выводит страницу категории
	*
	*
	*/
	public function actionCategory()
	{
		$id = \Yii::$app->request->get('id');
		$name = \Yii::$app->request->get('name');
		$post2 = Category::findOne([
		'id'=>$id,
		
		]);
			
		
		$query = Mat::find()->select(/*введите поля какие вам нужны*/)->andWhere([/*введите условия*/])->orderBy('id DESC');
		$pages = new \yii\data\Pagination(['totalCount' => $query->count(), 'pageSize' => 10, 'pageSizeParam' => false, 'forcePageParam' => false]);
		$posts = $query->offset($pages->offset)->limit($pages->limit)->all();
		return $this->render(
			'search',compact('posts','post2', 'pages')
		);
		
		
	}
	
	/*
	*static function category выводит в header СПИСОК КАТЕГОРИИ 
	*
	*
	*/
	public static function category()
	{
		$query = Category::find()->select('id, name,okon ')->limit(10)->all();
		
		return $query;
	}
	
	
	
}
?>
