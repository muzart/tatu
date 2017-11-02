<?php

use yii\db\Migration;

class m171102_070119_create_table_subject extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%subject}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'direction_id' => $this->integer(11)->notNull()->comment('Йўналиш'),
            'semester_id' => $this->integer(11)->notNull()->comment('Семестр'),
            'name' => $this->string(64)->notNull()->comment('Фан номи'),
            'lecturer_id' => $this->integer(11)->notNull()->comment('Маърузачи'),
            'practice_id' => $this->integer(11)->notNull()->comment('Амалиётчи'),
            'lab1_id' => $this->integer(11)->notNull()->comment('1-Лабораториячи'),
            'lab2_id' => $this->integer(11)->notNull()->comment('2-Лабораториячи'),
            'department_id' => $this->integer(11)->notNull()->comment('Кафедра'),
            'lecture_hour' => $this->integer(11)->comment('Маъруза соат'),
            'practice_hour' => $this->integer(11)->comment('Амалиёт соат'),
            'lab_hour' => $this->integer(11)->comment('Тажриба соат'),
            'independent_hour' => $this->integer(11)->comment('Мустақил соат'),
        ], $tableOptions);

        $this->addForeignKey('subject_ibfk_1', '{{%subject}}', 'direction_id', '{{%direction}}', 'id');
        $this->addForeignKey('subject_ibfk_2', '{{%subject}}', 'semester_id', '{{%term}}', 'id');
        $this->addForeignKey('subject_ibfk_3', '{{%subject}}', 'lecturer_id', '{{%teacher}}', 'id');
        $this->addForeignKey('subject_ibfk_4', '{{%subject}}', 'practice_id', '{{%teacher}}', 'id');
        $this->addForeignKey('subject_ibfk_5', '{{%subject}}', 'lab1_id', '{{%teacher}}', 'id');
        $this->addForeignKey('subject_ibfk_6', '{{%subject}}', 'lab2_id', '{{%teacher}}', 'id');
        $this->addForeignKey('subject_ibfk_7', '{{%subject}}', 'department_id', '{{%department}}', 'id');
    }

    public function safeDown()
    {
        $this->dropTable('{{%subject}}');
    }
}
