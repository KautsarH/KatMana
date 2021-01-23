<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('User Seed');
        
        $a11 = \App\User::updateOrCreate([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('secret123')
        ]);
  
    }
}
