<?php

namespace Database\Seeders;

use App\Models\Estate;
use App\Models\User;
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
        $user = User::factory()->create();

        $estates = Estate::factory()->count(10)->state(['agent_id'=>$user->id])->create();

    }
}
