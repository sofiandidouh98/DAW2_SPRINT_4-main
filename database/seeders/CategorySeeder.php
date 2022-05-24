<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Category::factory(10)->create();

        $category = new Category();

        $category->category = "Esports";

        $category->save();

        $category1 = new Category();

        $category1->category = "Motor";

        $category1->save();

        $category2 = new Category();

        $category2->category = "Moda";

        $category2->save();

        $category3 = new Category();

        $category3->category = "Fitness";

        $category3->save();

        $category4 = new Category();

        $category4->category = "Música";

        $category4->save();

        $category5 = new Category();

        $category5->category = "Robòtica";

        $category5->save();

        $category6 = new Category();

        $category6->category = "Videojocs";

        $category6->save();

        $category7 = new Category();

        $category7->category = "Ciència";

        $category7->save();

        $category8 = new Category();

        $category8->category = "Matemàtiques";

        $category8->save();

        $category9 = new Category();

        $category9->category = "Social";

        $category9->save();
    }
}
