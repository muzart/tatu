<?php

use yii\db\Migration;

class m171123_103519_create_table_materials extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%materials}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'subject_id' => $this->integer(10)->notNull(),
            'studies_kind' => $this->string()->notNull(),
            'topic' => $this->string(255)->notNull(),
            'planned_hour' => $this->string(10)->notNull(),
        ], $tableOptions);

        $this->addForeignKey('materials_ibfk_1', '{{%materials}}', 'subject_id', '{{%subject}}', 'id');
    }

    public function safeDown()
    {
        $this->dropTable('{{%materials}}');
    }
}
