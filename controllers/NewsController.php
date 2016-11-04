<?php

namespace app\controllers;

use app\models\News;
use yii\web\Controller;

class NewsController extends Controller
{
    public function actionIndex()
    {
        $articles = News::find()->all();
        return $this->render('index', compact('articles'));
    }

    public function actionView($id)
    {
        $article = News::findOne(['id' => $id]);
        return $this->render('view', compact('article'));
    }

}
