<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $news app\models\News */

?>
<div class="new-news">
    <p>На сайте <?=Yii::$app->name?>, была опубликована новая новость: <b><?=$news->title?></b></p>
    <?=Html::a('Подробнее', \Yii::$app->urlManager->createAbsoluteUrl(['news/view', 'id' => $news->id]));?>
</div>
