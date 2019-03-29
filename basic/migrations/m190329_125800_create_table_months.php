<?php

use yii\db\Migration;

class m190329_125800_create_table_months extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%months}}', [
            'id' => $this->primaryKey(),
            'id_cat' => $this->integer()->notNull(),
            'month' => $this->string()->notNull(),
        ], $tableOptions);

        $this->createIndex('id_cat', '{{%months}}', 'id_cat');
        $this->addForeignKey('months_ibfk_1', '{{%months}}', 'id_cat', '{{%category}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropTable('{{%months}}');
    }
}
