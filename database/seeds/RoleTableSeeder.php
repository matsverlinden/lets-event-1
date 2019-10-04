<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
           [
               'id' => 1,
               'name' => 'organizer'
           ],
            [
                'id' => 2,
                'name' => 'participant'
            ],
            [
                'id' => 3,
                'name' => 'referee'
            ]
        ]);
    }
}
