<?php

use yii\db\Migration;

class m190329_125801_create_table_ttj_room extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%ttj_room}}', [
            'id' => $this->primaryKey(),
            'section_id' => $this->integer()->notNull(),
            'number' => $this->string()->notNull(),
        ], $tableOptions);

        $this->createIndex('section_id', '{{%ttj_room}}', 'section_id');
        $this->addForeignKey('ttj_room_ibfk_1', '{{%ttj_room}}', 'section_id', '{{%sections}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropTable('{{%ttj_room}}');
    }
}
