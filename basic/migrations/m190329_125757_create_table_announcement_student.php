<?php

use yii\db\Migration;

class m190329_125757_create_table_announcement_student extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%announcement_student}}', [
            'id' => $this->primaryKey(),
            'announcement_id' => $this->integer()->notNull(),
            'student_id' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->createIndex('student_id', '{{%announcement_student}}', 'student_id');
        $this->createIndex('announcement_id', '{{%announcement_student}}', 'announcement_id');
        $this->addForeignKey('announcement_student_ibfk_1', '{{%announcement_student}}', 'announcement_id', '{{%announcements}}', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('announcement_student_ibfk_2', '{{%announcement_student}}', 'student_id', '{{%student}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropTable('{{%announcement_student}}');
    }
}
