<?php

use yii\db\Migration;

class m190329_125759_create_table_faculty extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%faculty}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->comment('Номи'),
            'building_id' => $this->integer()->notNull()->comment('Бино'),
        ], $tableOptions);

        $this->createIndex('building_id', '{{%faculty}}', 'building_id');
        $this->addForeignKey('faculty_ibfk_1', '{{%faculty}}', 'building_id', '{{%building}}', 'id', 'RESTRICT', 'CASCADE');
    }

    public function down()
    {
        $this->dropTable('{{%faculty}}');
    }
}
