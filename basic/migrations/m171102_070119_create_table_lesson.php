<?php

use yii\db\Migration;

class m171102_070119_create_table_lesson extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%lesson}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'subject_id' => $this->integer(11)->notNull(),
            'lesson_type' => $this->string()->notNull(),
        ], $tableOptions);

        $this->addForeignKey('lesson_ibfk_1', '{{%lesson}}', 'subject_id', '{{%subject}}', 'id');
    }

    public function safeDown()
    {
        $this->dropTable('{{%lesson}}');
    }
}
