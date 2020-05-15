<?php

namespace app\models;
use yii\base\Model;

class News extends Model {

    public $title;
    public $date;
    public $newsBody;

    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }

    public function rules()
    {
        return [
            [['title', 'date', 'newsBody'], 'required'],
            [['title', 'date'], 'string'],
            [['newsBody'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'title' => 'Title',
            'date' => 'Creation date',
            'newsBody' => 'News body',
        ];
    }

}