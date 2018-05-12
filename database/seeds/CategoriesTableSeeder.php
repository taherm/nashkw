<?php

use App\Models\Category;
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
        factory(Category::class, app()->environment('production') ? 2 : 20)->create(['parent_id' => 0 ])->each(function ($c) {
            $c->children()->saveMany(factory(Category::class, 3)->create(['parent_id' => $c->id]));
        });
    }
}
