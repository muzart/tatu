<?php

use yii\db\Migration;

class m190329_125800_create_table_protocol extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%protocol}}', [
            'id' => $this->primaryKey(),
            'participants' => $this->text(),
            'department_id' => $this->integer(),
            'schedule' => $this->text(),
            'statement' => $this->text(),
            'decision' => $this->text(),
        ], $tableOptions);

        $this->createIndex('department_id', '{{%protocol}}', 'department_id');
        $this->addForeignKey('protocol_ibfk_1', '{{%protocol}}', 'department_id', '{{%department}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropTable('{{%protocol}}');
    }
}
