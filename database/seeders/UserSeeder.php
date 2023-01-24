<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// Tambahan
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Seed Super Admin
        $super = new \App\Models\User();
        $super -> name = "SuperAdmin";
        $super -> username = "superadmin";
        $super -> password=bcrypt("userke1");
        $super -> level = "1";
        $super->save();

        //Seed Admin
        $admin = new \App\Models\User();
        $admin -> name = "Admin";
        $admin -> username = "admin";
        $admin -> password=bcrypt("userke2");
        $admin -> level = "2";
        $admin->save();

        //Seed Karyawan
        $karyawan = new \App\Models\User();
        $karyawan -> name = "Karyawan";
        $karyawan -> username = "karyawan";
        $karyawan -> password=bcrypt("userke3");
        $karyawan -> level = "3";
        $karyawan->save();
    }
}
