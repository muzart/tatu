<?php

use yii\db\Migration;

class m171102_105231_create_table_term extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%term}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'name' => $this->integer(11)->notNull()->comment('Номи'),
            'semester' => $this->string()->notNull()->comment('Семестр'),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%term}}');
    }
}
