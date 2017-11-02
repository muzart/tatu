<?php

use yii\db\Migration;

class m171102_105231_create_table_faculty extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%faculty}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'name' => $this->string(64)->notNull()->comment('Номи'),
            'building_id' => $this->integer(11)->notNull()->comment('Бино'),
        ], $tableOptions);

        $this->addForeignKey('faculty_ibfk_1', '{{%faculty}}', 'building_id', '{{%building}}', 'id');
    }

    public function safeDown()
    {
        $this->dropTable('{{%faculty}}');
    }
}
