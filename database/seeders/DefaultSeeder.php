<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin\Admin;

class DefaultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            "name" => 'Sadirul Islam',
            "username" => 'admin',
            "mobile" => '7407602125',
            "email" => 'sadirul.islam786@gmail.com',
            "password" => Hash::make('admin'),
            "auth_key" => 'er576tygtfr56uytrdtyfgcdgrtfgcfdrthgf',
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s")

        ];

        Admin::create($data);
    }
}
