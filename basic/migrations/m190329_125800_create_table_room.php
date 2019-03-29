<?php

use yii\db\Migration;

class m190329_125800_create_table_room extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%room}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->comment('Номи'),
            'building_id' => $this->integer()->notNull()->comment('Бино'),
        ], $tableOptions);

        $this->createIndex('building_id', '{{%room}}', 'building_id');
        $this->addForeignKey('room_ibfk_1', '{{%room}}', 'building_id', '{{%building}}', 'id', 'RESTRICT', 'CASCADE');
    }

    public function down()
    {
        $this->dropTable('{{%room}}');
    }
}
