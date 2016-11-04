<?php
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $user mdm\admin\models\User */

$resetLink = Url::to(['user/reset-password','token'=>$user->password_reset_token], true);
?>
Здравствуйте <?= $user->username ?>,

Перейдите по ссылке ниже, чтобы изменить Ваш пароль:

<?= $resetLink ?>
