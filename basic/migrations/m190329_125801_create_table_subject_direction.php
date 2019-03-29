<?php

use yii\db\Migration;

class m190329_125801_create_table_subject_direction extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%subject_direction}}', [
            'term_id' => $this->integer()->notNull(),
            'direction_id' => $this->integer()->notNull(),
            'subject_id' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->createIndex('subject_id', '{{%subject_direction}}', 'subject_id');
        $this->createIndex('term_id', '{{%subject_direction}}', 'term_id');
        $this->createIndex('direction_id', '{{%subject_direction}}', 'direction_id');
        $this->addForeignKey('subject_direction_ibfk_3', '{{%subject_direction}}', 'subject_id', '{{%subject}}', 'id', 'RESTRICT', 'CASCADE');
        $this->addForeignKey('subject_direction_ibfk_1', '{{%subject_direction}}', 'term_id', '{{%term}}', 'id', 'RESTRICT', 'CASCADE');
        $this->addForeignKey('subject_direction_ibfk_2', '{{%subject_direction}}', 'direction_id', '{{%direction}}', 'id', 'RESTRICT', 'CASCADE');
    }

    public function down()
    {
        $this->dropTable('{{%subject_direction}}');
    }
}
