<?php

use yii\db\Migration;

class m171102_105231_create_table_room extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%room}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'name' => $this->string(32)->notNull()->comment('Номи'),
            'building_id' => $this->integer(11)->notNull()->comment('Бино'),
        ], $tableOptions);

        $this->addForeignKey('room_ibfk_1', '{{%room}}', 'building_id', '{{%building}}', 'id');
    }

    public function safeDown()
    {
        $this->dropTable('{{%room}}');
    }
}
