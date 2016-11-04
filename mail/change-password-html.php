<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $user mdm\admin\models\User */
?>
<div class="password-reset">
    <p>Здравствуйте <?= Html::encode($user->username) ?>,</p>

    <p>Пароль на сайте <?=Yii::$app->name?></p>

    <p>Успешно изменен!</p>
</div>
