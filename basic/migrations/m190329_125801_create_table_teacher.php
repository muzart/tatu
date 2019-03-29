<?php

use yii\db\Migration;

class m190329_125801_create_table_teacher extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%teacher}}', [
            'id' => $this->primaryKey(),
            'fio' => $this->text()->notNull()->comment('ФИО'),
            'user_id' => $this->integer()->notNull()->comment('Фойдаланувчи'),
            'department_id' => $this->integer()->notNull()->comment('Кафедра'),
            'img' => $this->string()->comment('Расм'),
            'post' => $this->string()->notNull()->comment('Лавозим'),
            'type' => $this->string()->notNull()->comment('Тури'),
            'birthday' => $this->string()->comment('Туғилган йили'),
            'birthplace' => $this->string()->comment('Туғилган жойи'),
            'nationality' => $this->string()->comment(' Миллати'),
            'partiya' => $this->string()->comment('Партиявийлиги'),
            'degree' => $this->string()->comment('Маълумоти'),
            'ended' => $this->string()->comment('Тамомлаган'),
            'specialization' => $this->string()->comment('Маълумоти бўйича мутахассислиги'),
            'science_degree' => $this->string()->comment('Илмий даражаси'),
            'science_title' => $this->string()->comment('Илмий унвони'),
            'foreign_langs' => $this->string()->comment('Кайси чет тилларини билади'),
            'gov_awards' => $this->text()->comment('Давлат мукофотлари билан тақдирланганми (қанақа)'),
            'deputy' => $this->string()->comment('Халқ депутатлари, республика, вилоят, шаҳар ва туман Кенгаши депутатими ёки бошқа  сайланадиган органларнинг аъзосими (тўлиқ кўрсатилиши лозим)'),
            'started_work' => $this->string()->notNull(),
        ], $tableOptions);

        $this->createIndex('department_id', '{{%teacher}}', 'department_id');
        $this->createIndex('user_id', '{{%teacher}}', 'user_id');
        $this->addForeignKey('teacher_ibfk_1', '{{%teacher}}', 'user_id', '{{%user}}', 'id', 'RESTRICT', 'CASCADE');
        $this->addForeignKey('teacher_ibfk_2', '{{%teacher}}', 'department_id', '{{%department}}', 'id', 'RESTRICT', 'CASCADE');
    }

    public function down()
    {
        $this->dropTable('{{%teacher}}');
    }
}
