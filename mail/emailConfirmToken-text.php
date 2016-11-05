<?php

/* @var $this yii\web\View */
/* @var $user app\models\User */

$confirmLink = Yii::$app->urlManager->createAbsoluteUrl(['site/email-confirm', 'token' => $user->email_confirm_token]);
?>
Здравствуйте <?= $user->username ?>,

Перейдите по ссылке ниже, чтобы активировать Ваш аккаунт:

<?= $confirmLink ?>

Если Вы не регистрировались на нашем сайте, то просто удалите это письмо.
