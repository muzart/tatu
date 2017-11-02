<?php

use yii\db\Migration;

class m171102_105231_create_table_lesson_type extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%lesson_type}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'subject_id' => $this->integer(11)->notNull(),
            'lesson_type' => $this->string()->notNull(),
        ], $tableOptions);

        $this->addForeignKey('lesson_type_ibfk_1', '{{%lesson_type}}', 'subject_id', '{{%subject}}', 'id');
    }

    public function safeDown()
    {
        $this->dropTable('{{%lesson_type}}');
    }
}
