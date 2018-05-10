<?php

use App\Model\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Category::class, app()->environment('production') ? 2 : 10)->create()->each(function ($c) {
            $c->children()->saveMany(factory(Category::class, 3)->create(['is_parent' => false, 'parent_id' => $c->id]));
        });
    }
}
