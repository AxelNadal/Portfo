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
        App\User::create([
            "name" => "Axel Nadal",
            "email" => "axelNicolas28@gmail.com",
            "role_id" => 1,
            "password" => bcrypt("azerty")
        ]);

        factory(App\User::class,10)->create()
            ->each(function($user)
            {
                for($i= 0; $i < rand(1,3);$i++){
                    $user->posts()->save(factory(App\Post::class)->make());
                }
            });


    }
}
