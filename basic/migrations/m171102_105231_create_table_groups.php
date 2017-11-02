<?php

use yii\db\Migration;

class m171102_105231_create_table_groups extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%groups}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'name' => $this->string(10)->notNull()->comment('Nomi'),
            'group_head_id' => $this->integer(11)->notNull()->comment('Guruh murabbiyi'),
            'direction_id' => $this->integer(11)->notNull()->comment('Йўналиш'),
            'course' => $this->integer(11)->comment('Курс'),
            'faculty_id' => $this->integer(11)->notNull()->comment('Факультет'),
        ], $tableOptions);

        $this->addForeignKey('groups_ibfk_1', '{{%groups}}', 'group_head_id', '{{%teacher}}', 'id');
        $this->addForeignKey('groups_ibfk_2', '{{%groups}}', 'direction_id', '{{%direction}}', 'id');
        $this->addForeignKey('groups_ibfk_3', '{{%groups}}', 'faculty_id', '{{%faculty}}', 'id');
    }

    public function safeDown()
    {
        $this->dropTable('{{%groups}}');
    }
}
