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

        \App\Models\Customer::create([
            'code' => unique_code(),
            'name' => 'Ancla S.A.S',
            'url' => 'https://ancla.la',
            'email_contact' => 'juan2ramos@gmail.com',
        ]);

        // $this->call(UsersTableSeeder::class);
    }
}
