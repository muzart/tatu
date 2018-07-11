<?php

use yii\db\Migration;

class m180711_092733_user_role_column extends Migration
{

    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->addColumn('user', 'role', $this->string(20));
    }

    public function down()
    {
        echo "m180711_092733_user_role_column cannot be reverted.\n";

        return false;
    }
}
