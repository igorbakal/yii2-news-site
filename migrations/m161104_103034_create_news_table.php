<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation of table `news`.
 */
class m161104_103034_create_news_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%news}}', [
            'id' => Schema::TYPE_INTEGER . "(10) UNSIGNED NOT NULL AUTO_INCREMENT",
            'user_id' => Schema::TYPE_INTEGER . "(10) UNSIGNED NOT NULL",
            'title' => Schema::TYPE_STRING . "(255) NOT NULL",
            'short' => Schema::TYPE_STRING . "(500) NOT NULL",
            'content' => Schema::TYPE_TEXT . " NOT NULL",
            'PRIMARY KEY (id)',
        ]);

    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('news');
    }
}
