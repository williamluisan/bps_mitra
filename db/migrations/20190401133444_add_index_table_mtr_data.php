<?php


use Phinx\Migration\AbstractMigration;

class AddIndexTableMtrData extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('mtr_data');
        $table->addIndex(['data_no_mitra', 'data_no_ktp'], ['unique' => true])
            ->save();
    }

    public function down()
    {
        $table = $this->table('mtr_data');
        $table->removeIndex(['data_no_mitra', 'data_no_ktp'])
            ->save();
    }
}
