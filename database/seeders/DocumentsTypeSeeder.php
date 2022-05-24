<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DocumentsType;

class DocumentsTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DocumentsType::factory(1)->create();
    }
}
