<?php

use yii\db\Migration;

class m190329_125759_create_table_lesson extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%lesson}}', [
            'id' => $this->primaryKey(),
            'term_id' => $this->integer()->notNull(),
            'lesson_type_id' => $this->integer()->notNull(),
            'group_id' => $this->integer()->notNull(),
            'teacher_id' => $this->integer()->notNull(),
            'day' => $this->integer()->notNull(),
            'pair' => $this->integer()->notNull(),
            'sana' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->createIndex('teacher_id', '{{%lesson}}', 'teacher_id');
        $this->createIndex('lesson_type_id', '{{%lesson}}', 'lesson_type_id');
        $this->createIndex('group_id', '{{%lesson}}', 'group_id');
        $this->createIndex('term_id', '{{%lesson}}', 'term_id');
        $this->addForeignKey('lesson_ibfk_1', '{{%lesson}}', 'term_id', '{{%term}}', 'id', 'RESTRICT', 'RESTRICT');
        $this->addForeignKey('lesson_ibfk_2', '{{%lesson}}', 'lesson_type_id', '{{%lesson_type}}', 'id', 'RESTRICT', 'CASCADE');
        $this->addForeignKey('lesson_ibfk_3', '{{%lesson}}', 'group_id', '{{%groups}}', 'id', 'RESTRICT', 'CASCADE');
    }

    public function down()
    {
        $this->dropTable('{{%lesson}}');
    }
}
