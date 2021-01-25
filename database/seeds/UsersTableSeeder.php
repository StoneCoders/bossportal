<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'John Doe',
            'username' => 'jdoe',
            'email' => 'user@boss.com',
            'password' => bcrypt('benu123'),
            'code' => Str::random(60),
            'active' => 1,
            'type' => 'user',
            'phone' => '9786779999',
            'address' => '300 Concord Rd Billerica MA 01821',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@boss.com',
            'password' => bcrypt('benu123'),
            'code' => Str::random(60),
            'active' => 1,
            'type' => 'admin',
            'phone' => '9786778888',
            'address' => '330 Concord Rd Billerica MA 01821',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
            'name' => 'Operation',
            'username' => 'operation',
            'email' => 'operation@boss.com',
            'password' => bcrypt('benu123'),
            'code' => Str::random(60),
            'active' => 1,
            'type' => 'operation',
            'phone' => '9786778888',
            'address' => '330 Concord Rd Billerica MA 01821',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);


    }
}
