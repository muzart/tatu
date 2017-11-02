<?php

use yii\db\Migration;

class m171102_105231_create_table_settings extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%settings}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'university' => $this->string(64)->notNull()->comment('Университет'),
            'address' => $this->string(64)->notNull()->comment('Манзил'),
            'tel' => $this->string(64)->notNull()->comment('Тел'),
            'logo' => $this->string(255)->comment('Логотип'),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%settings}}');
    }
}
