<?php


use Phinx\Migration\AbstractMigration;

class CreateTableMtrData extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    addCustomColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Any other destructive changes will result in an error when trying to
     * rollback the migration.
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $table = $this->table('mtr_data');
        $table->addColumn('data_nama', 'string', ['limit' => 50])
            ->addColumn('data_alamat', 'text', ['null' => true])
            ->addColumn('data_no_ktp', 'string', ['limit' => 50])
            ->addColumn('data_id_pddk_trkhr', 'integer', ['limit' => 2, 'null' => true])
            ->addColumn('data_no_mitra', 'string', ['limit' => 50])
            ->addColumn('data_pas_foto', 'string', ['limit' => 50, 'null' => true])
            ->addColumn('data_id_pnglmn_krj', 'integer', ['limit' => 2, 'null' => true])
            ->addColumn('data_no_hp', 'string', ['limit' => 50, 'null' => true])
            ->create();
    }
}
