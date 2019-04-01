<?php


use Phinx\Migration\AbstractMigration;

class AlterTableMtrData2 extends AbstractMigration
{
    public function up() 
    {
        $table = $this->table('mtr_pengalaman');
        $table->dropForeignKey('pnglmn_data_id')
            ->save();

        $table->removeColumn('pnglmn_data_id')
            ->addColumn('pnglmn_data_no_mitra', 'string', ['limit' => 50, 'after' => 'id'])
            ->addForeignKey('pnglmn_data_no_mitra', 'mtr_data', 'data_no_mitra', ['delete' => 'CASCADE', 'update' => 'CASCADE'])
            ->save();
    }

    public function down()
    {
        $table = $this->table('mtr_pengalaman');
        $table->addColumn('pnglmn_data_id', 'integer', ['limit' => 11])
            ->addForeignKey('pnglmn_data_id', 'mtr_data', 'id', ['delete' => 'CASCADE', 'update' => 'CASCADE'])
            ->dropForeignKey('pnglmn_data_no_mitra')
            ->save();

        $table->removeColumn('pnglmn_data_no_mitra')
            ->save();
    }
}
