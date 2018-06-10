<?php

use App\Models\Coupon;
use App\Models\Order;
use App\Models\OrderMeta;
use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* each order has the following :
        - order_meta
        - coupon
        */
        factory(Order::class, app()->environment('production') ? 2 : 100)->create()->each(function ($o) {
            $coupon = factory(Coupon::class)->create(['user_id' => $o->user_id]);
            $o->update(['coupon_id' => $coupon->id]);
            $o->order_metas()->saveMany(factory(OrderMeta::class, 3)->create());
        });
    }
}
