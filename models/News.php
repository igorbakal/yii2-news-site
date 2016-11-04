<?php

namespace app\models;

use mdm\admin\models\User;
use Yii;
use yii\db\ActiveRecord;
use yii\helpers\Html;

/**
 * This is the model class for table "news".
 *
 * @property string $id
 * @property string $title
 * @property string $short
 * @property string $content
 */
class News extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'short', 'content'], 'required'],
            [['content'], 'string'],
            [['title'], 'string', 'max' => 255],
            [['short'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '№',
            'title' => 'Название',
            'short' => 'Краткое описание',
            'content' => 'Полное описание',
        ];
    }

    /**
     * The notice of new news at the website
     * @return bool
     */
    public function sendEmailNoticeNewNews()
    {
        $users = User::find()->where(['status' => User::STATUS_ACTIVE])->all();
        foreach ($users as $key => $val) {
            if (in_array('email', $val->types)) {
                Yii::$app->mailer->compose(['html' => 'emailNews-html', 'text' => 'emailNews-text'], ['news' => $this])
                    ->setFrom([Yii::$app->params['adminEmail'] => Yii::$app->name])
                    ->setTo($val->email)
                    ->setSubject('Новая новость на сайте ' . Yii::$app->name)
                    ->send();
            }
        }
        return true;
    }

    /**
     * Write to table notice new news for users
     * @return bool
     */
    public function sendAddNewsNotice()
    {
        $users = User::find()->where(['status' => User::STATUS_ACTIVE])->all();
        foreach ($users as $key => $val) {
            if (in_array('browser', $val->types)) {
                $notice = new Notice();
                $notice->for_user = $val->id;
                $notice->status = $notice::STATUS_NOT_READ;
                $link = Html::a('Подробнее', Yii::$app->urlManager->createAbsoluteUrl(['/news/view', 'id' => $this->id,]));
                $notice->content = 'Только что была опубликована новая новость <b>'.$this->title.'</b>. '.$link;
                $notice->save();
                }
            }
        return true;
    }
}
