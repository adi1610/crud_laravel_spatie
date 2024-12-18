<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'adicahyo@mail.com')->first();
        if (is_null($user)) {
            $user = new User();
            $user->name = "Adi Tri Cahyono";
            $user->email = "adicahyo@mail.com";
            $user->password = Hash::make('adi1234');
            $user->save();
        }
    }
}
