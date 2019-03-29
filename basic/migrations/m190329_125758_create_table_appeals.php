<?php

use yii\db\Migration;

class m190329_125758_create_table_appeals extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%appeals}}', [
            'id' => $this->primaryKey(),
            'term_id' => $this->integer()->notNull(),
            'student_fio' => $this->string()->notNull(),
            'student_id' => $this->integer()->notNull(),
            'region' => $this->string()->notNull(),
            'address' => $this->string()->notNull(),
            'phone' => $this->string()->notNull(),
            'date' => $this->string()->notNull(),
            'status' => $this->string()->notNull(),
        ], $tableOptions);

        $this->createIndex('term_id', '{{%appeals}}', 'term_id');
        $this->createIndex('student_id', '{{%appeals}}', 'student_id');
        $this->addForeignKey('appeals_ibfk_1', '{{%appeals}}', 'student_id', '{{%student}}', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('appeals_ibfk_2', '{{%appeals}}', 'term_id', '{{%term}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropTable('{{%appeals}}');
    }
}
