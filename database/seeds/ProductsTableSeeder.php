<?php

use App\Models\Category;
use App\Models\Gallery;
use App\Models\Image;
use App\Models\Product;
use App\Models\ProductAttribute;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // each product has the following :
        // many product attributes and
        // belongs to many categories
        // has gallery with images
        // belongs to many orders !!!
        factory(Product::class, app()->environment('production') ? 10 : 200)->create()->each(function ($p) {
            $p->categories()->saveMany(Category::all()->random(3));
            $p->gallery()->save(factory(Gallery::class, 1)->create()->each(function ($gallery) {
                $gallery->images()->saveMany(factory(Image::class, 5)->create());
            }));
            $p->product_attributes()->save(factory(ProductAttribute::class)->create());
        });
    }
}
