<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResourcesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = json_decode(
            file_get_contents(database_path('data/resources.json')),
            true
        );

        DB::table('resources')->truncate();
        DB::table('resources')->insert($data);
    }
}
