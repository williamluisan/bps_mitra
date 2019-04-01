<?php


use Phinx\Migration\AbstractMigration;

class CreateTableMtrPengalaman extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('mtr_pengalaman');
        $table->addColumn('pnglmn_data_id', 'integer', ['limit' => 11])
            ->addColumn('pnglmn_keg_id', 'integer', ['limit' => 11])
            ->addForeignKey('pnglmn_data_id', 'mtr_data', 'id', ['delete' => 'CASCADE', 'update' => 'CASCADE'])
            ->addForeignKey('pnglmn_keg_id', 'mtr_prd_kegiatan', 'id', ['delete' => 'CASCADE', 'update' => 'CASCADE'])
            ->save();
    }

    public function down()
    {
        $this->table('mtr_pengalaman')->drop()->save();
    }
}
