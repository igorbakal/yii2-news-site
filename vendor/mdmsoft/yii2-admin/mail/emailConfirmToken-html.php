<?php
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $user mdm\admin\models\User */

$resetLink = Url::to(['site/email-confirm','token'=>$user->email_confirm_token], true);
?>
<div class="password-reset">
    <p>Здравствуйте <?= Html::encode($user->username) ?>,</p>

    <p>Перейдите по ссылке ниже, чтобы активировать Ваш аккаунт:</p>

    <p><?= Html::a(Html::encode($resetLink), $resetLink) ?></p>

    <p>Если Вы не регистрировались на нашем сайте, то просто удалите это письмо.</p>
</div>
