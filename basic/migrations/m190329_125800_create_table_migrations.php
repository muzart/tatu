<?php

use yii\db\Migration;

class m190329_125800_create_table_migrations extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%migrations}}', [
            'migration' => $this->string()->notNull(),
            'batch' => $this->integer()->notNull(),
        ], $tableOptions);

    }

    public function down()
    {
        $this->dropTable('{{%migrations}}');
    }
}
