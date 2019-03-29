<?php

use yii\db\Migration;

class m190329_131916_create_table_current_term extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%current_term}}', [
            'id' => $this->primaryKey(),
            'current_term_id' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->createIndex('current_term_id', '{{%current_term}}', 'current_term_id');
        $this->addForeignKey('current_term_ibfk_1', '{{%current_term}}', 'current_term_id', '{{%term}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropTable('{{%current_term}}');
    }
}
