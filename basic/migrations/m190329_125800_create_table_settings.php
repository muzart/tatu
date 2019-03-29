<?php

use yii\db\Migration;

class m190329_125800_create_table_settings extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%settings}}', [
            'id' => $this->primaryKey(),
            'university' => $this->string()->notNull()->comment('Университет'),
            'address' => $this->string()->notNull()->comment('Манзил'),
            'tel' => $this->string()->notNull()->comment('Тел'),
            'logo' => $this->string()->comment('Логотип'),
        ], $tableOptions);

    }

    public function down()
    {
        $this->dropTable('{{%settings}}');
    }
}
