<?php
namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;
/**
 * This is the model class for table "notice".
 *
 * @property integer $id
 * @property string $content
 * @property integer $for_user
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class Notice extends ActiveRecord
{
    const STATUS_NOT_READ = 0;
    const STATUS_READ = 10;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'notice';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content', 'for_user', 'status'], 'required'],
            [['content'], 'string'],
            [['for_user', 'status', 'created_at', 'updated_at'], 'integer'],
            ['status', 'default', 'value' => self::STATUS_NOT_READ],
            ['status', 'in', 'range' => [self::STATUS_NOT_READ, self::STATUS_READ]],
        ];
    }
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'content' => 'Content',
            'for_user' => 'For user',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}