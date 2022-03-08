<?php

use App\Models\User;
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
        factory(User::class)->create([
            'name' => 'ryookazaki',
            'email' => 'ryo.okazaki@asia-quest.jp',
        ]);

        factory(User::class, 30)->create();
    }
}
