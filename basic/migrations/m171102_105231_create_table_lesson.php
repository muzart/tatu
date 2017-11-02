<?php

use yii\db\Migration;

class m171102_105231_create_table_lesson extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%lesson}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'term_id' => $this->integer(11)->notNull(),
            'lesson_type_id' => $this->integer(11)->notNull(),
            'group_id' => $this->integer(11)->notNull(),
            'teacher_id' => $this->integer(11)->notNull(),
            'day' => $this->integer(11)->notNull(),
            'pair' => $this->integer(11)->notNull(),
            'sana' => $this->integer(11)->notNull(),
        ], $tableOptions);

        $this->addForeignKey('lesson_ibfk_1', '{{%lesson}}', 'term_id', '{{%term}}', 'id');
        $this->addForeignKey('lesson_ibfk_2', '{{%lesson}}', 'lesson_type_id', '{{%lesson_type}}', 'id');
        $this->addForeignKey('lesson_ibfk_3', '{{%lesson}}', 'group_id', '{{%groups}}', 'id');
        $this->addForeignKey('lesson_ibfk_4', '{{%lesson}}', 'teacher_id', '{{%teacher}}', 'id');
    }

    public function safeDown()
    {
        $this->dropTable('{{%lesson}}');
    }
}
