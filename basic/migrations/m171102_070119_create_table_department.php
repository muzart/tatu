<?php

use yii\db\Migration;

class m171102_070119_create_table_department extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%department}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'name' => $this->string(64)->notNull()->comment('Номи'),
            'faculty_id' => $this->integer(11)->notNull()->comment('Факультет'),
            'building_id' => $this->integer(11)->notNull()->comment('Бино'),
            'room_id' => $this->integer(11)->notNull()->comment('Хона'),
        ], $tableOptions);

        $this->addForeignKey('department_ibfk_1', '{{%department}}', 'faculty_id', '{{%faculty}}', 'id');
        $this->addForeignKey('department_ibfk_2', '{{%department}}', 'building_id', '{{%building}}', 'id');
        $this->addForeignKey('department_ibfk_3', '{{%department}}', 'room_id', '{{%room}}', 'id');
    }

    public function safeDown()
    {
        $this->dropTable('{{%department}}');
    }
}
