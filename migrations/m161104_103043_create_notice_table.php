<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation of table `notice`.
 */
class m161104_103043_create_notice_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%notice}}', [
            'id' => Schema::TYPE_INTEGER . "(11) UNSIGNED NOT NULL AUTO_INCREMENT",
            'content' => Schema::TYPE_STRING . "(255) NOT NULL",
            'for_user' => Schema::TYPE_INTEGER . "(10) UNSIGNED NOT NULL",
            'status' => Schema::TYPE_SMALLINT . "(6) NOT NULL",
            'created_at' => Schema::TYPE_INTEGER . "(11) NOT NULL",
            'updated_at' => Schema::TYPE_INTEGER . "(11) NOT NULL",
            'PRIMARY KEY (id)',
        ]);

    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('notice');
    }
}
