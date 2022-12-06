<?php

use App\Specialization;
use App\User;
use Illuminate\Database\Seeder;

class SpecializationUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        $specializations = Specialization::all();
        foreach ($users as $user) {
            $randomSpec = rand(1, 5);
            $user->specializations()->attach($randomSpec);
        } 
    }
}
