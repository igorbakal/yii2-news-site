<?php
namespace mdm\admin\models\form;

use Yii;
use yii\base\Model;

/**
 * Signup form
 */
class Signup extends Model
{
    public $username;
    public $email;
    public $password;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'filter', 'filter' => 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => 'common\models\User', 'message' => 'Это имя уже взято.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'unique', 'targetClass' => 'common\models\User', 'message' => 'Этот адрес электронной почты взят.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
        ];
    }

    public function attributeLabels()
    {
        return [
            'username' => 'Имя пользователя',
            'email' => 'Эл. почта',
            'password' => 'Пароль'
        ];
    }

    /**
     * Sign up new user and send activate email
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if ($this->validate()) {
            $user = new User();
            $user->username = $this->username;
            $user->email = $this->email;
            $user->status = User::STATUS_INACTIVE;
            $user->setPassword($this->password);
            $user->notice = [reset($user->types)];
            $user->generateAuthKey();
            $user->generateEmailConfirmToken();
            if ($user->save()) {
                $auth = Yii::$app->authManager;
                $defaultRole = $auth->getRole(Yii::$app->params['defaultRole']);
                $auth->assign($defaultRole, $user->getId());
                Yii::$app->mailer->compose(['html' => 'emailConfirmToken-html', 'text' => 'emailConfirmToken-text'], ['user' => $user])
                    ->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->name])
                    ->setTo($this->email)
                    ->setSubject('Подтверждение регистрации ' . Yii::$app->name)
                    ->send();
                Yii::$app->mailer->compose(['html' => 'registerNewUser-html', 'text' => 'registerNewUser-text'], ['user' => $user])
                    ->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->name])
                    ->setTo(Yii::$app->params['adminEmail'])
                    ->setSubject('Регистрация нового пользователя ' . Yii::$app->name)
                    ->send();
                return $user;
            }
        }
        return null;
    }
}
