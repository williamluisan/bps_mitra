<?php


use Phinx\Migration\AbstractMigration;

class AlterTableMtrDataRemoveFkeyPnlmnKerja extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('mtr_data');
        $table->dropForeignKey('data_id_pnglmn_krj')
            ->save();

        $table->removeColumn('data_id_pnglmn_krj')
            ->save();
    }

    public function down()
    {
        $table = $this->table('mtr_data');
        $table->addColumn('data_id_pnglmn_krj', 'integer', ['limit' => 2, 'null' => true])
            ->addForeignKey('data_id_pnglmn_krj', 'mtr_prd_kegiatan', 'id', [
                'delete' => 'NO_ACTION', 'update' => 'NO_ACTION'
            ])
            ->save();
    }
}
