<?php

use yii\db\Migration;

class m190329_125759_create_table_direction extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%direction}}', [
            'id' => $this->primaryKey(),
            'code' => $this->string()->notNull()->comment('Йўналиш коди'),
            'name' => $this->string()->notNull()->comment('Йўналиш номи'),
        ], $tableOptions);

    }

    public function down()
    {
        $this->dropTable('{{%direction}}');
    }
}
