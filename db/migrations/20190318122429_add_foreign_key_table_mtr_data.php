<?php


use Phinx\Migration\AbstractMigration;

class AddForeignKeyTableMtrData extends AbstractMigration
{
    public function up() 
    {
        $table = $this->table('mtr_data');
        $table->addForeignKey('data_id_pddk_trkhr', 'ref_pddk', 'id', [
                'delete' => 'NO_ACTION', 'update' => 'NO_ACTION'
            ])
            ->addForeignKey('data_id_pnglmn_krj', 'mtr_prd_kegiatan', 'id', [
                'delete' => 'NO_ACTION', 'update' => 'NO_ACTION'
            ])
            ->save();
    }

    public function down()
    {
        $table = $this->table('mtr_data');
        $table->dropForeignKey('data_id_pddk_trkhr')
            ->dropForeignKey('dataa_id_pnglmn_krj')
            ->save();
    }
}
