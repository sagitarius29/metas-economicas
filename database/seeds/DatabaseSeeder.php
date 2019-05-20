<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class)->create([
            'email' => 'ronnie.adolfo@gmail.com'
        ]);
        // $this->call(UsersTableSeeder::class);
    }
}
