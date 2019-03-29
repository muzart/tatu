<?php

use yii\db\Migration;

class m190329_125801_create_table_student extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%student}}', [
            'id' => $this->primaryKey(),
            'reyting_no' => $this->string()->notNull()->comment('Рейтинг дафтарчаси номери'),
            'direction_id' => $this->integer()->notNull()->comment('Мутахассислик'),
            'surname' => $this->string()->notNull()->comment('Фамилия'),
            'name' => $this->string()->notNull()->comment('Исм'),
            'patronymic' => $this->string()->comment('Шариф'),
            'birthday' => $this->string()->comment('Туғилган санаси'),
            'birthplace' => $this->string()->comment('Туғилган жойи'),
            'education' => $this->string()->comment('Маълумоти'),
            'workplace' => $this->string()->comment('Ўқишга  киргунга қадар иш жойи '),
            'father_name' => $this->string()->comment('Ота-онаси ҳақида маълумот'),
            'father_workplace' => $this->string(),
            'father_phone' => $this->string(),
            'mother_name' => $this->string(),
            'mother_workplace' => $this->string(),
            'mother_phone' => $this->string(),
            'family_status' => $this->string()->comment('Оилавий аҳволи'),
            'passport_serie' => $this->string()->comment('Паспорт серияси'),
            'passport_number' => $this->string()->comment('Паспорт рақами'),
            'passport_given' => $this->string()->comment('ким томонидан ва қачон берилган'),
            'parents_address' => $this->string()->comment('Ота-онасининг манзили, телефони'),
            'address' => $this->string()->comment('Уй манзили, шу жумладан ижара уй, талабалар турар жойи, телефон'),
            'living_type' => $this->string()->notNull()->comment('Яшаш тури'),
            'created' => $this->integer()->comment('Яратилган вакти'),
            'updated' => $this->integer()->comment('Тахрирланган вакти'),
            'nationality' => $this->string()->notNull()->comment('Миллати'),
            'photo' => $this->string(),
            'user_id' => $this->integer()->notNull(),
            'group_id' => $this->integer(),
        ], $tableOptions);

        $this->createIndex('user_id', '{{%student}}', 'user_id');
        $this->createIndex('direction_id', '{{%student}}', 'direction_id');
        $this->createIndex('reyting_no', '{{%student}}', 'reyting_no', true);
        $this->addForeignKey('student_ibfk_1', '{{%student}}', 'direction_id', '{{%direction}}', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('student_ibfk_3', '{{%student}}', 'group_id', '{{%groups}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropTable('{{%student}}');
    }
}
