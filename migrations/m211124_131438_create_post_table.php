<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%post}}`.
 */
class m211124_131438_create_post_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%post}}', [
            'id'            => $this->primaryKey(),
            'title'         => $this->string(),
            'description'   => $this->text(),
            'user_id'       => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%post}}');
    }
}
