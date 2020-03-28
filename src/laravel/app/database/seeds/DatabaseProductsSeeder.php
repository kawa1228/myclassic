<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '交響曲第41番',
            'name_origin' => 'Symphony No. 41',
            'nick_name' => 'ジュピター',
            'product_code' => 'K.551',
            'recorded_year' => 1788,
            'description' => '交響曲第41番 ハ長調 K. 551 は、ヴォルフガング・アマデウス・モーツァルトが作曲した最後の交響曲である。',
            'period_id' => null,
            'composer_id' => 1,
            'form_id' => null,
        ];
        DB::table('products')->insert($param);
    }
}
