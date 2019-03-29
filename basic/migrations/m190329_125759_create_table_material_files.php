<?php

use yii\db\Migration;

class m190329_125759_create_table_material_files extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%material_files}}', [
            'id' => $this->primaryKey(),
            'material_id' => $this->integer()->notNull(),
            'file_path' => $this->string()->notNull(),
        ], $tableOptions);

        $this->addForeignKey('material_files_ibfk_1', '{{%material_files}}', 'material_id', '{{%materials}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropTable('{{%material_files}}');
    }
}
