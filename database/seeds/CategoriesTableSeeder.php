<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('categories')->delete();

        \DB::table('categories')->insert(array(
            0 =>
            array(
                'id' => 1,
                'parent_id' => 0,
                'name_ar' => 'ناش أوتليت',
                'name_en' => 'NASH Outlet',
                'caption_ar' => 'ناش أوتليت',
                'caption_en' => 'NASH Outlet',
                'description_en' => 'NASH Outlet',
                'description_ar' => 'ناش أوتليت',
                'image' => '38.jpeg',
                'limited' => 1,
                'order' => 4,
                'is_home' => 1,
                'is_featured' => 0,
                'active' => 1,
                'deleted_at' => NULL,
                'created_at' => '2019-03-16 16:17:25',
                'updated_at' => '2019-12-15 09:52:40',
            ),
            1 =>
            array(
                'id' => 2,
                'parent_id' => 0,
                'name_ar' => 'ملابس أطفال',
                'name_en' => 'Kids Wear',
                'caption_ar' => 'ملابس أطفال',
                'caption_en' => 'Kids Wear',
                'description_en' => 'Kids Wear',
                'description_ar' => 'ملابس أطفال',
                'image' => '33.jpeg',
                'limited' => 0,
                'order' => 3,
                'is_home' => 1,
                'is_featured' => 0,
                'active' => 1,
                'deleted_at' => NULL,
                'created_at' => '2019-03-16 16:17:25',
                'updated_at' => '2019-04-01 18:45:25',
            ),
            2 =>
            array(
                'id' => 3,
                'parent_id' => 0,
                'name_ar' => 'قسم الرجال',
                'name_en' => 'Men',
                'caption_ar' => 'قسم الرجال',
                'caption_en' => 'Men',
                'description_en' => 'Men',
                'description_ar' => 'قسم الرجال',
                'image' => '32.jpeg',
                'limited' => 0,
                'order' => 2,
                'is_home' => 1,
                'is_featured' => 0,
                'active' => 1,
                'deleted_at' => NULL,
                'created_at' => '2019-03-16 16:17:25',
                'updated_at' => '2019-04-01 18:38:17',
            ),
            3 =>
            array(
                'id' => 4,
                'parent_id' => 0,
                'name_ar' => 'القسم النسائي',
                'name_en' => 'Women',
                'caption_ar' => 'نسائي',
                'caption_en' => 'Women',
                'description_en' => 'Women',
                'description_ar' => 'نسائي',
                'image' => '1.jpeg',
                'limited' => 0,
                'order' => 1,
                'is_home' => 1,
                'is_featured' => 0,
                'active' => 1,
                'deleted_at' => NULL,
                'created_at' => '2019-03-16 16:17:26',
                'updated_at' => '2019-12-15 17:01:30',
            ),
            4 =>
            array(
                'id' => 11,
                'parent_id' => 2,
                'name_ar' => 'أولاد',
                'name_en' => 'Boys',
                'caption_ar' => 'أولاد',
                'caption_en' => 'Boys',
                'description_en' => 'Boys',
                'description_ar' => 'أولاد',
                'image' => '6.jpeg',
                'limited' => 0,
                'order' => 1,
                'is_home' => 1,
                'is_featured' => 0,
                'active' => 1,
                'deleted_at' => NULL,
                'created_at' => '2019-03-16 16:17:26',
                'updated_at' => '2019-04-01 18:47:28',
            ),
            5 =>
            array(
                'id' => 12,
                'parent_id' => 2,
                'name_ar' => 'بنات',
                'name_en' => 'Girls',
                'caption_ar' => 'بنات',
                'caption_en' => 'Girls',
                'description_en' => 'Girls',
                'description_ar' => 'بنات',
                'image' => '5.jpeg',
                'limited' => 1,
                'order' => 2,
                'is_home' => 1,
                'is_featured' => 0,
                'active' => 1,
                'deleted_at' => NULL,
                'created_at' => '2019-03-16 16:17:26',
                'updated_at' => '2019-04-01 18:50:00',
            ),
            6 =>
            array(
                'id' => 23,
                'parent_id' => 4,
                'name_ar' => 'كاجوال',
                'name_en' => 'Casual',
                'caption_ar' => 'كاجوال',
                'caption_en' => 'Casual',
                'description_en' => 'Casual',
                'description_ar' => 'كاجوال',
                'image' => '34.jpeg',
                'limited' => 0,
                'order' => 1,
                'is_home' => 1,
                'is_featured' => 0,
                'active' => 1,
                'deleted_at' => NULL,
                'created_at' => '2019-03-16 16:17:28',
                'updated_at' => '2019-12-15 09:51:54',
            ),
            7 =>
            array(
                'id' => 24,
                'parent_id' => 4,
                'name_ar' => 'بدلات إستقبال وجلابيه',
                'name_en' => 'Gathering & Jalabiah',
                'caption_ar' => 'بدلات إستقبال وجلابيه',
                'caption_en' => 'Gathering & Jalabiah',
                'description_en' => 'Gathering and Jalabiah',
                'description_ar' => 'بدلات إستقبال وجلابيه',
                'image' => '40.jpeg',
                'limited' => 0,
                'order' => 2,
                'is_home' => 1,
                'is_featured' => 0,
                'active' => 1,
                'deleted_at' => NULL,
                'created_at' => '2019-03-16 16:17:28',
                'updated_at' => '2019-12-18 06:10:47',
            ),
            8 =>
            array(
                'id' => 30,
                'parent_id' => 4,
                'name_ar' => 'الأحذية والحقائب',
                'name_en' => 'Shoes & Bags',
                'caption_ar' => 'الأحذية والحقائب',
                'caption_en' => 'Shoes & Bags',
                'description_en' => 'Shoes & Bags',
                'description_ar' => 'الأحذية والحقائب',
                'image' => NULL,
                'limited' => 0,
                'order' => 4,
                'is_home' => 1,
                'is_featured' => 0,
                'active' => 1,
                'deleted_at' => NULL,
                'created_at' => '2019-04-01 18:32:25',
                'updated_at' => '2019-12-18 06:09:57',
            ),
            9 =>
            array(
                'id' => 35,
                'parent_id' => 0,
                'name_ar' => 'حصرية',
                'name_en' => 'Exclusive',
                'caption_ar' => 'حصرية',
                'caption_en' => 'Exclusive',
                'description_en' => NULL,
                'description_ar' => NULL,
                'image' => NULL,
                'limited' => 0,
                'order' => 6,
                'is_home' => 1,
                'is_featured' => 0,
                'active' => 1,
                'deleted_at' => NULL,
                'created_at' => '2019-12-18 06:06:03',
                'updated_at' => '2019-12-18 06:06:03',
            ),
        ));
    }
}
