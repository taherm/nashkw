<?php

use Illuminate\Database\Seeder;

class SlidersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('sliders')->delete();

        \DB::table('sliders')->insert(array(
            0 =>
            array(
                'id' => 1,
                'image' => '222.jpeg',
                'url' => 'https://trantow.biz/sit-possimus-magnam-animi-molestias-eaque-voluptatibus.html',
                'caption_en' => 'Mr. Rasheed Greenholt',
                'caption_ar' => 'فاستعد بذلك الصورة الحيوانية، فرأى أن الصواب كان له من فاعل ليس بجسم، ولا هو قوة في جسم، فانها لا.',
                'active' => 1,
                'order' => 2,
                'created_at' => '2019-03-16 16:17:31',
                'updated_at' => '2019-04-01 17:35:47',
                'deleted_at' => NULL,
                'path' => NULL,
            ),
            1 =>
            array(
                'id' => 2,
                'image' => '333.jpeg',
                'url' => 'http://www.feeney.org/officiis-sed-quia-quod-recusandae-molestiae',
                'caption_en' => 'Eldon Greenholt',
                'caption_ar' => 'الدنس والرجس عن جسمه والاغتسال بالماء في أكثر ما وصفه هؤلاء بعد هذا الاتفاق، ليست شديدة الاختصاص.',
                'active' => 1,
                'order' => 10,
                'created_at' => '2019-03-16 16:17:31',
                'updated_at' => '2019-04-01 17:47:28',
                'deleted_at' => NULL,
                'path' => NULL,
            ),
            2 =>
            array(
                'id' => 3,
                'image' => '111.jpeg',
                'url' => 'http://www.casper.com/nulla-adipisci-autem-sit-consequuntur-enim-quis',
                'caption_en' => 'Merlin Schinner DDS',
                'caption_ar' => 'وما لم يقف على هذا الكلام، أن يقبلو عذري فيما تسائلت في تبينه وتسامحت في تثبيته، فلم أفعل ذلك إلا.',
                'active' => 1,
                'order' => 7,
                'created_at' => '2019-03-16 16:17:31',
                'updated_at' => '2019-04-01 17:48:15',
                'deleted_at' => NULL,
                'path' => NULL,
            )

        ));
    }
}
