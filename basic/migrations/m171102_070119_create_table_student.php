<?php

use yii\db\Migration;

class m171102_070119_create_table_student extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%student}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'reyting_no' => $this->string(10)->notNull()->comment('Рейтинг дафтарчаси номери'),
            'direction_id' => $this->integer(11)->notNull()->comment('Мутахассислик'),
            'surname' => $this->string(24)->notNull()->comment('Фамилия'),
            'name' => $this->string(24)->notNull()->comment('Исм'),
            'patronymic' => $this->string(24)->comment('Шариф'),
            'birthday' => $this->string(12)->comment('Туғилган санаси'),
            'birthplace' => $this->string(64)->comment('Туғилган жойи'),
            'education' => $this->string(100)->comment('Маълумоти'),
            'workplace' => $this->string(100)->comment('Ўқишга  киргунга қадар иш жойи '),
            'father_name' => $this->string(64)->comment('Ота-онаси ҳақида маълумот'),
            'father_workplace' => $this->string(100),
            'father_phone' => $this->string(20),
            'mother_name' => $this->string(64),
            'mother_workplace' => $this->string(100),
            'mother_phone' => $this->string(20),
            'family_status' => $this->string(100)->comment('Оилавий аҳволи'),
            'passport_serie' => $this->string(3)->comment('Паспорт серияси'),
            'passport_number' => $this->string(8)->comment('Паспорт рақами'),
            'passport_given' => $this->string(64)->comment('ким томонидан ва қачон берилган'),
            'parents_address' => $this->string(128)->comment('Ота-онасининг манзили, телефони'),
            'address' => $this->string(128)->comment('Уй манзили, шу жумладан ижара уй, талабалар турар жойи, телефон'),
            'living_type' => $this->string()->notNull()->comment('Яшаш тури'),
            'created' => $this->integer(11)->comment('Яратилган вакти'),
            'updated' => $this->integer(11)->comment('Тахрирланган вакти'),
            'nationality' => $this->string(16)->notNull()->comment('Миллати'),
            'photo' => $this->string(255),
            'user_id' => $this->integer(11)->notNull(),
        ], $tableOptions);

        $this->createIndex('reyting_no', '{{%student}}', 'reyting_no', true);

        $this->addForeignKey('student_ibfk_1', '{{%student}}', 'direction_id', '{{%direction}}', 'id');
        $this->addForeignKey('student_ibfk_2', '{{%student}}', 'user_id', '{{%user}}', 'id');
    }

    public function safeDown()
    {
        $this->dropTable('{{%student}}');
    }
}
