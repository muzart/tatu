<?php

use yii\db\Migration;

class m190329_125801_create_table_ttj_students extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%ttj_students}}', [
            'id' => $this->primaryKey(),
            'term_id' => $this->integer()->notNull(),
            'room_id' => $this->integer()->notNull(),
            'section_id' => $this->integer()->notNull(),
            'student_id' => $this->integer()->notNull(),
            'inside' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->createIndex('student_id', '{{%ttj_students}}', 'student_id');
        $this->createIndex('room_id', '{{%ttj_students}}', 'room_id');
        $this->createIndex('term_id', '{{%ttj_students}}', 'term_id');
        $this->createIndex('section_id', '{{%ttj_students}}', 'section_id');
        $this->addForeignKey('ttj_students_ibfk_3', '{{%ttj_students}}', 'section_id', '{{%sections}}', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('ttj_students_ibfk_4', '{{%ttj_students}}', 'student_id', '{{%student}}', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('ttj_students_ibfk_1', '{{%ttj_students}}', 'term_id', '{{%term}}', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('ttj_students_ibfk_2', '{{%ttj_students}}', 'room_id', '{{%ttj_room}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropTable('{{%ttj_students}}');
    }
}
