<?php

use yii\db\Migration;

class m180715_054019_protocol extends Migration
{
    public function safeUp()
    {
        $this->createTable('protocol', [
            'id' => $this->primaryKey(),
            'participants' => $this->text(),
            'department_id' => $this->integer(20),
            'schedule' => $this->text(),
            'statement' => $this->text(),
            'decision' => $this->text(),
        ]);
    }

    public function safeDown()
    {
        echo "m180715_054019_protocol cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180715_054019_protocol cannot be reverted.\n";

        return false;
    }
    */
}
