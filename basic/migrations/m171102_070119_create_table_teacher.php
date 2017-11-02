<?php

use yii\db\Migration;

class m171102_070119_create_table_teacher extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%teacher}}', [
            'id' => $this->integer(11)->notNull()->append('PRIMARY KEY'),
            'fio' => $this->text()->notNull()->comment('ФИО'),
            'user_id' => $this->integer(11)->notNull()->comment('Фойдаланувчи'),
            'department_id' => $this->integer(11)->notNull()->comment('Кафедра'),
            'img' => $this->string(255)->comment('Расм'),
            'post' => $this->string(32)->notNull()->comment('Лавозим'),
            'type' => $this->string()->notNull()->comment('Тури'),
            'birthday' => $this->string(16)->comment('Туғилган йили'),
            'birthplace' => $this->string(64)->comment('Туғилган жойи'),
            'nationality' => $this->string(20)->comment(' Миллати'),
            'partiya' => $this->string(32)->comment('Партиявийлиги'),
            'degree' => $this->string(16)->comment('Маълумоти'),
            'ended' => $this->string(64)->comment('Тамомлаган'),
            'specialization' => $this->string(32)->comment('Маълумоти бўйича мутахассислиги'),
            'science_degree' => $this->string(32)->comment('Илмий даражаси'),
            'science_title' => $this->string(32)->comment('Илмий унвони'),
            'foreign_langs' => $this->string(32)->comment('Кайси чет тилларини билади'),
            'gov_awards' => $this->text()->comment('Давлат мукофотлари билан тақдирланганми (қанақа)'),
            'deputy' => $this->string(64)->comment('Халқ депутатлари, республика, вилоят, шаҳар ва туман Кенгаши депутатими ёки бошқа  сайланадиган органларнинг аъзосими (тўлиқ кўрсатилиши лозим)'),
        ], $tableOptions);

        $this->addForeignKey('teacher_ibfk_1', '{{%teacher}}', 'user_id', '{{%user}}', 'id');
        $this->addForeignKey('teacher_ibfk_2', '{{%teacher}}', 'department_id', '{{%department}}', 'id');
    }

    public function safeDown()
    {
        $this->dropTable('{{%teacher}}');
    }
}
