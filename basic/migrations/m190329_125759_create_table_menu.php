<?php

use yii\db\Migration;

class m190329_125759_create_table_menu extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%menu}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'parent' => $this->integer(),
            'route' => $this->string(),
            'order' => $this->integer(),
            'data' => $this->binary(),
        ], $tableOptions);

        $this->createIndex('parent', '{{%menu}}', 'parent');
        $this->addForeignKey('menu_ibfk_1', '{{%menu}}', 'parent', '{{%menu}}', 'id', 'SET NULL', 'CASCADE');
    }

    public function down()
    {
        $this->dropTable('{{%menu}}');
    }
}
