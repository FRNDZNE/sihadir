<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $useradmin = User::create([
            'name' => 'Admin',
            'email' => 'admin@polnep.com',
            'password' => bcrypt('rahasia'),
        ]);

        $admin = Role::where('name', 'admin')->first();
        $useradmin->addRole($admin);
        
        $userdosen = User::create([
            'name' => 'Dosen X',
            'email'=> 'dosen@polnep.com',
            'password' => bcrypt('rahasia'),
        ]);
        $dosen = Role::where('name','dosen')->first();
        $userdosen->addRole('dosen');

        $usermahasiswa = User::create([
            'name' => 'Mahasiswa Y',
            'email' => 'mahasiswa@polnep.com',
            'password' => bcrypt('rahasia'),
        ]);
        $mahasiswa = Role::where('name','mahasiswa')->first();
        $usermahasiswa->addRole($mahasiswa);

    }
}
