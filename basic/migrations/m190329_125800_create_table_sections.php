<?php

use yii\db\Migration;

class m190329_125800_create_table_sections extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%sections}}', [
            'id' => $this->primaryKey(),
            'number' => $this->string()->notNull(),
            'floor' => $this->string()->notNull(),
        ], $tableOptions);

    }

    public function down()
    {
        $this->dropTable('{{%sections}}');
    }
}
