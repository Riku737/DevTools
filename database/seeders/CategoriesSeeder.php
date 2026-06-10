<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = json_decode(
            file_get_contents(database_path('data/categories.json')),
            true
        );

        DB::table('categories')->truncate();
        DB::table('categories')->insert($data);
    }
}
