<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

            $user = User::create([
                "email"=>"mangasprai@icloud.com", 
                "name"=>"Dario", 
                "password"=>Hash::make("Mille987!!")
            ]);
        
            $user->createBaseChars();
    }
}
