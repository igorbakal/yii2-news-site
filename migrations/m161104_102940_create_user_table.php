<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation of table `user`.
 */
class m161104_102940_create_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%user}}', [
            'id' => Schema::TYPE_PK,
            'username' => Schema::TYPE_STRING . "(32) NOT NULL",
            'auth_key' => Schema::TYPE_STRING . "(32) NOT NULL",
            'password_hash' => Schema::TYPE_STRING . "(255) NOT NULL",
            'password_reset_token' => Schema::TYPE_STRING . "(255) NULL",
            'email' => Schema::TYPE_STRING . "(255) NOT NULL",
            'email_confirm_token' => Schema::TYPE_STRING . "(255) NULL",
            'status' => Schema::TYPE_SMALLINT . "(6) NOT NULL DEFAULT '10'",
            'created_at' => Schema::TYPE_INTEGER . "(11) NOT NULL",
            'updated_at' => Schema::TYPE_INTEGER . "(11) NOT NULL",
            'notification_type' => Schema::TYPE_STRING . "(55) NOT NULL",
        ]);

    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('user');
    }
}
