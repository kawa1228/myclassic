<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseComposersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'mozart',
            'name_jp' => 'ヴォルフガング・アマデウス・モーツァルト',
            'name_origin' => 'Wolfgang Amadeus Mozart',
            'birth_year' => 1756,
            'death_year' => 1791,
            'icon_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/1e/Wolfgang-amadeus-mozart_1.jpg/440px-Wolfgang-amadeus-mozart_1.jpg',
            'home_city' => 'ザルツブルク',
            'description' => 'オーストリアの音楽家。ハイドン、ベートーヴェンと並んで古典派音楽、ウィーン古典派を代表する一人である。',
            'country_id' => 1
        ];
        DB::table('composers')->insert($param);
    }
}
