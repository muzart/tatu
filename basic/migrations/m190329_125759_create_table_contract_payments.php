<?php

use yii\db\Migration;

class m190329_125759_create_table_contract_payments extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%contract_payments}}', [
            'id' => $this->primaryKey(),
            'student_id' => $this->integer()->notNull()->comment('Talaba'),
            'group_id' => $this->integer()->notNull(),
            'term_id' => $this->integer()->notNull()->comment('Semestr'),
            'payment_date' => $this->string()->notNull()->comment('To\'langan vaqti'),
            'payment_amount' => $this->integer()->notNull()->comment('To\'langan summa'),
        ], $tableOptions);

        $this->createIndex('term_id', '{{%contract_payments}}', 'term_id');
        $this->createIndex('group_id', '{{%contract_payments}}', 'group_id');
        $this->createIndex('student_id', '{{%contract_payments}}', 'student_id');
        $this->addForeignKey('contract_payments_ibfk_1', '{{%contract_payments}}', 'student_id', '{{%student}}', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('contract_payments_ibfk_2', '{{%contract_payments}}', 'term_id', '{{%term}}', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('contract_payments_ibfk_3', '{{%contract_payments}}', 'group_id', '{{%groups}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropTable('{{%contract_payments}}');
    }
}
