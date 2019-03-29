<?php

use yii\db\Migration;

class m190329_125759_create_table_marks extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%marks}}', [
            'id' => $this->primaryKey(),
            'group_id' => $this->integer()->notNull(),
            'student_id' => $this->integer()->notNull(),
            'subject_id' => $this->integer()->notNull(),
            'lesson_type_id' => $this->integer()->notNull(),
            'mark' => $this->double()->notNull(),
        ], $tableOptions);

        $this->createIndex('subject_id', '{{%marks}}', 'subject_id');
        $this->createIndex('lesson_type_id', '{{%marks}}', 'lesson_type_id');
        $this->createIndex('student_id', '{{%marks}}', 'student_id');
        $this->createIndex('group_id', '{{%marks}}', 'group_id');
        $this->addForeignKey('marks_ibfk_1', '{{%marks}}', 'group_id', '{{%groups}}', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('marks_ibfk_2', '{{%marks}}', 'lesson_type_id', '{{%lesson_type}}', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('marks_ibfk_3', '{{%marks}}', 'student_id', '{{%student}}', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('marks_ibfk_4', '{{%marks}}', 'subject_id', '{{%subject}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropTable('{{%marks}}');
    }
}
