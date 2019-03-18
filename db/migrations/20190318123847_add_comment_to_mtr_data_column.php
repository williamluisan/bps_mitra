<?php


use Phinx\Migration\AbstractMigration;

class AddCommentToMtrDataColumn extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('mtr_data');
        $table->changeColumn('data_id_pnglmn_krj', 'integer', [
                'limit' => 2, 'null' => true, 'comment' => 'Referensi: mtr_prd_kegiatan'
            ])
            ->save();
    }

    public function down()
    {
        $table = $this->table('mtr_data');
        $table->changeColumn('data_id_pnglmn_krj', 'integer', [
                'limit' => 2, 'null' => true
            ])
            ->save();
    }
}
