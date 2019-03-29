<?php

use yii\db\Migration;

class m190329_125759_create_table_contract_amounts extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%contract_amounts}}', [
            'id' => $this->primaryKey(),
            'total_amount' => $this->integer()->notNull()->comment('To\'lanishi kerak bo\'lgan umumiy summa'),
            'term_id' => $this->integer()->notNull()->comment('Semestr'),
            'direction_id' => $this->integer()->notNull()->comment('Yo\'nalish'),
            'deadline' => $this->string()->notNull()->comment('Ohirgi muddat'),
        ], $tableOptions);

        $this->createIndex('direction_id', '{{%contract_amounts}}', 'direction_id');
        $this->addForeignKey('contract_amounts_ibfk_1', '{{%contract_amounts}}', 'direction_id', '{{%direction}}', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('term_ifk', '{{%contract_amounts}}', 'term_id', '{{%term}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropTable('{{%contract_amounts}}');
    }
}
