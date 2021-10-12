<?php

namespace App\Database\Seeds;

use App\Models\UserModel;
use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $user_model = model(UserModel::class);
        $data = [
            [
                'nama' => 'teguh',
                'email' => 'hugetwa@gmail.com',
                'password' => 'teguhwaluyo'
            ],
        ];
        foreach ($data as $d) {
            $user_model->save($d);
        }
    }
}
