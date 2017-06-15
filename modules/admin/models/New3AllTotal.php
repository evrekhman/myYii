<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "new3_all_total".
 *
 * @property integer $id_all
 * @property integer $id
 * @property string $type
 * @property string $rating_imdb
 * @property string $rating_kp
 
 */
class New3AllTotal extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '/*введите имя таблицы*/';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['/*введите столбец*/', '/*введите столбец*/'], 'required'],
            [['/*введите столбец*/', '/*введите столбец*/',], 'integer'],
            [[ '/*введите столбец*/'], 'string'],
            [[ '/*введите столбец*/'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            '/*введите столбец*/' => '/*введите столбец с первой большой буквы*/',
            '/*введите столбец*/' => '/*введите столбец с первой большой буквы*/',
            
        ];
    }
}
