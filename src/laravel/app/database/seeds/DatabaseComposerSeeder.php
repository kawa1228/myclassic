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
            'name' => 'モーツァルト',
            'name_jp' => 'ヴォルフガング・アマデウス・モーツァルト',
            'name_origin' => 'Wolfgang Amadeus Mozart',
            'birth_at' => '1756-01-27',
            'death_at' => '1791-12-05',
            'icon_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/1e/Wolfgang-amadeus-mozart_1.jpg/440px-Wolfgang-amadeus-mozart_1.jpg',
            'home_city' => 'ザルツブルク',
            'description' => 'オーストリアの音楽家。ハイドン、ベートーヴェンと並んで古典派音楽、ウィーン古典派を代表する一人である。',
            'country_id' => null,
            'period_id' => 4
        ];
        DB::table('composers')->insert($param);

        $param = [
            'name' => 'ベートーヴェン',
            'name_jp' => 'ルートヴィヒ・ヴァン・ベートーヴェン',
            'name_origin' => 'Ludwig van Beethoven',
            'birth_at' => '1770-12-16',
            'death_at' => '1827-03-26',
            'icon_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6f/Beethoven.jpg/440px-Beethoven.jpg',
            'home_city' => 'ウィーン',
            'description' => 'ドイツの作曲家、ピアニスト。音楽史上極めて重要な作曲家の一人であり、日本では「楽聖」とも呼ばれる。その作品は古典派音楽の集大成かつロマン派音楽の先駆けとされ、後世の音楽家たちに多大な影響を与えた。',
            'country_id' => null,
            'period_id' => 4
        ];
        DB::table('composers')->insert($param);

        $param = [
            'name' => 'ヴィヴァルディ',
            'name_jp' => 'アントニオ・ヴィヴァルディ',
            'name_origin' => 'Antonio Lucio Vivaldi',
            'birth_at' => '1678-03-04',
            'death_at' => '1741-07-28',
            'icon_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Antonio_Vivaldi.jpg/440px-Antonio_Vivaldi.jpg',
            'home_city' => 'ヴェネツィア',
            'description' => 'ヴェネツィア出身のバロック後期の作曲家で、ヴァイオリニスト。カトリック教会の司祭。とくに多数の協奏曲の作曲家として知られる。',
            'country_id' => null,
            'period_id' => 3
        ];
        DB::table('composers')->insert($param);

        $param = [
            'name' => 'バッハ',
            'name_jp' => 'ヨハン・ゼバスティアン・バッハ',
            'name_origin' => 'Johann Sebastian Bach',
            'birth_at' => '1685-03-31',
            'death_at' => '1750-07-28',
            'icon_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b5/Bach.jpg/440px-Bach.jpg',
            'home_city' => 'ライプツィヒ',
            'description' => '鍵盤楽器の演奏家としても高名であり、当時から即興演奏の大家として知られていた。西洋音楽の基礎を構築した作曲家であり音楽の源流であるとも捉えられ、日本の音楽教育では「音楽の父」と称される。',
            'country_id' => null,
            'period_id' => 3
        ];
        DB::table('composers')->insert($param);
    }
}
