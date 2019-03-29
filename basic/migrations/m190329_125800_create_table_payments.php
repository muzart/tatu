<?php

use yii\db\Migration;

class m190329_125800_create_table_payments extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%payments}}', [
            'id' => $this->primaryKey(),
            'month' => $this->string()->notNull(),
            'year' => $this->string()->notNull(),
            'payed' => $this->string()->notNull(),
            'student_id' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->createIndex('student_id_2', '{{%payments}}', 'student_id');
        $this->createIndex('student_id', '{{%payments}}', 'student_id');
        $this->addForeignKey('payments_ibfk_1', '{{%payments}}', 'student_id', '{{%student}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropTable('{{%payments}}');
    }
}
