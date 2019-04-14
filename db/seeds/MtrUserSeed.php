<?php


use Phinx\Seed\AbstractSeed;

class MtrUserSeed extends AbstractSeed
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
                'user_uname' => 'admin',
                'user_pass' => '$2y$10$tk0bwAMDpSt68876hjbKuOO2/OCUw7GYaFtiAkjGlSdxmNH5PrsLm', // decrypt: admin
                'user_nama' => 'Administrator',
                'user_role' => 'administrator' 
            ]
        ];
        
        $table = $this->table('mtr_user');
        $table->truncate();
        $table->insert($data)
            ->save();
    }
}
