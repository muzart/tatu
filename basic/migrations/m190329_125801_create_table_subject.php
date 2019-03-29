<?php

use yii\db\Migration;

class m190329_125801_create_table_subject extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%subject}}', [
            'id' => $this->primaryKey(),
            'direction_id' => $this->integer()->notNull()->comment('Йўналиш'),
            'semester_id' => $this->integer()->notNull()->comment('Семестр'),
            'name' => $this->string()->notNull()->comment('Фан номи'),
            'lecturer_id' => $this->integer()->notNull()->comment('Маърузачи'),
            'practice_id' => $this->integer()->notNull()->comment('Амалиётчи'),
            'lab1_id' => $this->integer()->notNull()->comment('1-Лабораториячи'),
            'lab2_id' => $this->integer()->notNull()->comment('2-Лабораториячи'),
            'department_id' => $this->integer()->notNull()->comment('Кафедра'),
            'lecture_hour' => $this->integer()->comment('Маъруза соат'),
            'practice_hour' => $this->integer()->comment('Амалиёт соат'),
            'lab_hour' => $this->integer()->comment('Тажриба соат'),
            'seminar' => $this->integer()->comment('Seminar soat'),
            'seminar_id' => $this->integer()->notNull(),
            'independent_hour' => $this->integer()->comment('Мустақил соат'),
            's1' => $this->integer(),
            's2' => $this->integer(),
            's3' => $this->integer(),
            's4' => $this->integer(),
            's5' => $this->integer(),
            's6' => $this->integer(),
            's7' => $this->integer(),
            's8' => $this->integer(),
        ], $tableOptions);

        $this->createIndex('seminar_id', '{{%subject}}', 'seminar_id');
        $this->createIndex('lab2_id', '{{%subject}}', 'lab2_id');
        $this->createIndex('practice_id', '{{%subject}}', 'practice_id');
        $this->createIndex('semester_id', '{{%subject}}', 'semester_id');
        $this->createIndex('department_id', '{{%subject}}', 'department_id');
        $this->createIndex('lab1_id', '{{%subject}}', 'lab1_id');
        $this->createIndex('lecturer_id', '{{%subject}}', 'lecturer_id');
        $this->createIndex('direction_id', '{{%subject}}', 'direction_id');
        $this->addForeignKey('subject_ibfk_7', '{{%subject}}', 'department_id', '{{%department}}', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('subject_ibfk_8', '{{%subject}}', 'seminar_id', '{{%teacher}}', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('subject_ibfk_1', '{{%subject}}', 'direction_id', '{{%direction}}', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('subject_ibfk_2', '{{%subject}}', 'semester_id', '{{%term}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropTable('{{%subject}}');
    }
}
