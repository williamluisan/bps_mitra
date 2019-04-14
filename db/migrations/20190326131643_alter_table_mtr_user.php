<?php


use Phinx\Migration\AbstractMigration;

class AlterTableMtrUser extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('mtr_user');
        $table->changeColumn('user_pass', 'string', ['limit' => 255])
            ->save();
    }

    public function down()
    {
        
    }
}
