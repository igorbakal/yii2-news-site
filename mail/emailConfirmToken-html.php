<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $user mdm\admin\models\User */

$confirmLink = Yii::$app->urlManager->createAbsoluteUrl(['site/email-confirm', 'token' => $user->email_confirm_token]);
?>
<div class="password-reset">
    <p>Здравствуйте <?= Html::encode($user->username) ?>,</p>

    <p>Перейдите по ссылке ниже, чтобы активировать Ваш аккаунт:</p>

    <p><?= Html::a(Html::encode($confirmLink), $confirmLink) ?></p>

    <p>Если Вы не регистрировались на нашем сайте, то просто удалите это письмо.</p>
</div>
