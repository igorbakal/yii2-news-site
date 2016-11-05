<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $user app\models\User */
?>
<div class="password-reset">
    <p>Здравствуйте <?= Html::encode($user->username) ?>,</p>

    <p>Пароль на сайте <?=Yii::$app->name?> успешно изменен!</p>
</div>
