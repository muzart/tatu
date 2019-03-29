<?php

use yii\db\Migration;

class m190329_125759_create_table_groups extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%groups}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->comment('Nomi'),
            'group_head_id' => $this->integer()->notNull()->comment('Guruh murabbiyi'),
            'direction_id' => $this->integer()->notNull()->comment('Йўналиш'),
            'course' => $this->integer()->comment('Курс'),
            'faculty_id' => $this->integer()->notNull()->comment('Факультет'),
        ], $tableOptions);

        $this->createIndex('group_head_id_2', '{{%groups}}', 'group_head_id');
        $this->createIndex('specialization_id', '{{%groups}}', 'direction_id');
        $this->createIndex('faculty_id', '{{%groups}}', 'faculty_id');
        $this->createIndex('group_head_id', '{{%groups}}', 'group_head_id');
        $this->addForeignKey('groups_ibfk_2', '{{%groups}}', 'direction_id', '{{%direction}}', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('groups_ibfk_3', '{{%groups}}', 'faculty_id', '{{%faculty}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropTable('{{%groups}}');
    }
}
