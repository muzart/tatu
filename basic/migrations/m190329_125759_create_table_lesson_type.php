<?php

use yii\db\Migration;

class m190329_125759_create_table_lesson_type extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%lesson_type}}', [
            'id' => $this->primaryKey(),
            'subject_id' => $this->integer()->notNull(),
            'lesson_type' => $this->string()->notNull(),
        ], $tableOptions);

        $this->createIndex('subject_id', '{{%lesson_type}}', 'subject_id');
        $this->addForeignKey('lesson_type_ibfk_1', '{{%lesson_type}}', 'subject_id', '{{%subject}}', 'id', 'RESTRICT', 'CASCADE');
    }

    public function down()
    {
        $this->dropTable('{{%lesson_type}}');
    }
}
