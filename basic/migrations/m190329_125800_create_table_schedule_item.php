<?php

use yii\db\Migration;

class m190329_125800_create_table_schedule_item extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%schedule_item}}', [
            'id' => $this->primaryKey(),
            'subject_id' => $this->integer()->notNull(),
            'subject_type' => $this->string()->notNull()->comment('Dars turi'),
            'teacher_id' => $this->integer()->notNull()->comment('O\'qituvchi'),
            'room_id' => $this->integer()->notNull()->comment('Xona'),
            'group_id' => $this->integer()->notNull()->comment('Guruh'),
            'day' => $this->string()->notNull()->comment('Hafta kuni'),
            'pair' => $this->string()->notNull()->comment('Juftlik/Toqlik'),
            'term_id' => $this->integer()->notNull()->comment('Semestr'),
            'week_type' => $this->string()->notNull(),
        ], $tableOptions);

        $this->createIndex('term_id', '{{%schedule_item}}', 'term_id');
        $this->createIndex('room_id', '{{%schedule_item}}', 'room_id');
        $this->createIndex('subject_id', '{{%schedule_item}}', 'subject_id');
        $this->createIndex('teacher_id', '{{%schedule_item}}', 'teacher_id');
        $this->createIndex('group_id', '{{%schedule_item}}', 'group_id');
        $this->addForeignKey('schedule_item_ibfk_4', '{{%schedule_item}}', 'teacher_id', '{{%teacher}}', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('schedule_item_ibfk_5', '{{%schedule_item}}', 'term_id', '{{%term}}', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('schedule_item_ibfk_6', '{{%schedule_item}}', 'subject_id', '{{%subject}}', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('schedule_item_ibfk_1', '{{%schedule_item}}', 'group_id', '{{%groups}}', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('schedule_item_ibfk_2', '{{%schedule_item}}', 'room_id', '{{%room}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropTable('{{%schedule_item}}');
    }
}
