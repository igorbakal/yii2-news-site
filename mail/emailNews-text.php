<?php

/* @var $this yii\web\View */
/* @var $news app\models\News */
$newslink = Yii::$app->urlManager->createAbsoluteUrl(['news/view', 'id' => $news->id]);
?>

На сайте <?=Yii::$app->name?>, была опубликована новая новость: <?=$news->title?>

Подробнее <?=$newslink?>
