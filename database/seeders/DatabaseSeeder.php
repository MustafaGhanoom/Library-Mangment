<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // الطريقة النظامية
        $this->call([
        CategorySeeder::class,
        BookSeeder::class,
    ]);

        // ---------------------------------------------------

        // طريقة المباشرة المختصرة
        \App\Models\User::factory(10)->create();


        // ____________________________________________________

       $Manager= \App\Models\User::factory()->create([
            'name' => 'Mustafa',
            'email' => 'mustafaghanoom@gmail.com',
            'password' =>Hash::make('123123123'),
            'role'=>'Manager'
        ]);
    }
}
