<?php

use yii\db\Migration;

class m171102_105231_create_table_menu extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%menu}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'name' => $this->string(128)->notNull(),
            'parent' => $this->integer(11),
            'route' => $this->string(255),
            'order' => $this->integer(11),
            'data' => $this->binary(),
        ], $tableOptions);

        $this->addForeignKey('menu_ibfk_1', '{{%menu}}', 'parent', '{{%menu}}', 'id');
    }

    public function safeDown()
    {
        $this->dropTable('{{%menu}}');
    }
}
