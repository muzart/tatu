<?php

use yii\db\Migration;

class m190329_125801_create_table_student_mistakes extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%student_mistakes}}', [
            'id' => $this->primaryKey(),
            'student_id' => $this->integer()->notNull(),
            'date' => $this->string()->notNull(),
            'description' => $this->string()->notNull(),
        ], $tableOptions);

        $this->createIndex('student_id', '{{%student_mistakes}}', 'student_id');
        $this->addForeignKey('student_mistakes_ibfk_1', '{{%student_mistakes}}', 'student_id', '{{%student}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropTable('{{%student_mistakes}}');
    }
}
