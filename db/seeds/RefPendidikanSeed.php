<?php


use Phinx\Seed\AbstractSeed;

class RefPendidikanSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'pddk_nama' => 'Tidak Sekolah'
            ],
            [
                'id' => 2,
                'pddk_nama' => 'SD'
            ],
            [
                'id' => 3,
                'pddk_nama' => 'SMP'
            ],
            [
                'id' => 4,
                'pddk_nama' => 'SMA'
            ],
            [
                'id' => 5,
                'pddk_nama' => 'S1'
            ],
            [
                'id' => 6,
                'pddk_nama' => 'S2'
            ],
            [
                'id' => 7,
                'pddk_nama' => 'S3'
            ],
        ];

        $table = $this->table('ref_pddk');
        $table->insert($data)
            ->save();
    }
}
