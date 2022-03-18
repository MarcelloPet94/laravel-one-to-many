<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['cinema','motori','cibo','sport']; // definizione categorie
        foreach ($categories as $category_name) {

            $new_category = new Category();
            $new_category->name = $category_name;
            $new_category->slug = Str::of($category_name)->slug("-");

            $new_category->save();
        }
    }
}