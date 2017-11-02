<?php

use yii\db\Migration;

class m171102_070119_create_table_direction extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%direction}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'code' => $this->string(10)->notNull()->comment('Йўналиш коди'),
            'name' => $this->string(100)->notNull()->comment('Йўналиш номи'),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%direction}}');
    }
}
