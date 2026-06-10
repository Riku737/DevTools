<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubcategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = json_decode(
            file_get_contents(database_path('data/subcategories.json')),
            true
        );

        DB::table('subcategories')->truncate();
        DB::table('subcategories')->insert($data);
    }
}
