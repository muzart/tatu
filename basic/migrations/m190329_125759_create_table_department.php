<?php

use yii\db\Migration;

class m190329_125759_create_table_department extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%department}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->comment('Номи'),
            'faculty_id' => $this->integer()->notNull()->comment('Факультет'),
            'building_id' => $this->integer()->notNull()->comment('Бино'),
            'room_id' => $this->integer()->notNull()->comment('Хона'),
        ], $tableOptions);

        $this->createIndex('building_id', '{{%department}}', 'building_id');
        $this->createIndex('room_id', '{{%department}}', 'room_id');
        $this->createIndex('faculty_id', '{{%department}}', 'faculty_id');
        $this->addForeignKey('department_ibfk_1', '{{%department}}', 'faculty_id', '{{%faculty}}', 'id', 'RESTRICT', 'CASCADE');
        $this->addForeignKey('department_ibfk_2', '{{%department}}', 'building_id', '{{%building}}', 'id', 'RESTRICT', 'CASCADE');
        $this->addForeignKey('department_ibfk_3', '{{%department}}', 'room_id', '{{%room}}', 'id', 'RESTRICT', 'CASCADE');
    }

    public function down()
    {
        $this->dropTable('{{%department}}');
    }
}
