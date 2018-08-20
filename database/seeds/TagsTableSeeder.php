<?php

use App\Models\Product;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Tag::class, app()->environment('production') ? 2 : 50)->create()->each(function ($q) {
            return $q->products()->saveMany(Product::all()->random());
        });
    }
}
