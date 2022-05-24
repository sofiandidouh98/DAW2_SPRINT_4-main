<?php

namespace Database\Seeders;

use App\Models\UserType;
use Illuminate\Database\Seeder;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new UserType();
        $user->type = "usuari";

        $user->save();

        $administrator = new UserType();
        $administrator->type = "administrador";

        $administrator->save();
    }
}
