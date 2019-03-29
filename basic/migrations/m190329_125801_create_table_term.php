<?php

use yii\db\Migration;

class m190329_125801_create_table_term extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%term}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->comment('Номи'),
            'semester' => $this->string()->notNull()->comment('Семестр'),
        ], $tableOptions);

    }

    public function down()
    {
        $this->dropTable('{{%term}}');
    }
}
