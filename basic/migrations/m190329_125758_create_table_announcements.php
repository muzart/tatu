<?php

use yii\db\Migration;

class m190329_125758_create_table_announcements extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%announcements}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'start_date' => $this->string()->notNull(),
            'tittle' => $this->string()->notNull(),
            'body' => $this->text()->notNull(),
            'end_date' => $this->string()->notNull(),
            'status' => $this->string()->notNull(),
        ], $tableOptions);

        $this->createIndex('user_id', '{{%announcements}}', 'user_id');
        $this->addForeignKey('announcements_ibfk_1', '{{%announcements}}', 'user_id', '{{%user}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropTable('{{%announcements}}');
    }
}
