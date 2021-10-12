<?php

namespace App\Database\Seeds;

use App\Models\HakAksesModel;
use CodeIgniter\Database\Seeder;

class HakAksesSeeder extends Seeder
{
    public function run()
    {
        $hak_akses_model = model(HakAksesModel::class);
        $data = [
            [
                'nama_akses' => 'super admin',
            ],
            [
                'nama_akses' => 'admin',
            ],
            [
                'nama_akses' => 'user',
            ],
        ];
        foreach ($data as $d) {
            $hak_akses_model->save($d);
        }
    }
}
