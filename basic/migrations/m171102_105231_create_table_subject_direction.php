<?php

use yii\db\Migration;

class m171102_105231_create_table_subject_direction extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%subject_direction}}', [
            'term_id' => $this->integer(11)->notNull(),
            'direction_id' => $this->integer(11)->notNull(),
            'subject_id' => $this->integer(11)->notNull(),
        ], $tableOptions);

        $this->addForeignKey('subject_direction_ibfk_1', '{{%subject_direction}}', 'term_id', '{{%term}}', 'id');
        $this->addForeignKey('subject_direction_ibfk_2', '{{%subject_direction}}', 'direction_id', '{{%direction}}', 'id');
        $this->addForeignKey('subject_direction_ibfk_3', '{{%subject_direction}}', 'subject_id', '{{%subject}}', 'id');
    }

    public function safeDown()
    {
        $this->dropTable('{{%subject_direction}}');
    }
}
