<?php

use yii\db\Migration;

class m190329_125759_create_table_materials extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%materials}}', [
            'id' => $this->primaryKey(),
            'subject_id' => $this->integer()->notNull(),
            'studies_kind' => $this->string()->notNull(),
            'topic' => $this->string()->notNull(),
            'planned_hour' => $this->string()->notNull(),
        ], $tableOptions);

        $this->createIndex('subject_id', '{{%materials}}', 'subject_id');
        $this->addForeignKey('materials_ibfk_1', '{{%materials}}', 'subject_id', '{{%subject}}', 'id', 'RESTRICT', 'CASCADE');
    }

    public function down()
    {
        $this->dropTable('{{%materials}}');
    }
}
