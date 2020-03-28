<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabasePeriodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '中世',
            'begin_min' => 500,
            'begin_max' => null,
            'end_min' => 1400,
            'end_max' => null,
            'description' => 'グレゴリオ聖歌をはじめとするキリスト教の聖歌や、トルバドゥールやトルヴェールに代表される世俗音楽がある。',
            'genre_id' => null,
        ];
        DB::table('periods')->insert($param);

        $param = [
            'name' => 'ルネサンス',
            'begin_min' => 1400,
            'begin_max' => null,
            'end_min' => 1600,
            'end_max' => null,
            'description' => '中世西洋音楽とバロック音楽の中間に位置し、その中心をなすのは、ポリフォニーによる声楽、とくに、宗教曲である。',
            'genre_id' => null,
        ];
        DB::table('periods')->insert($param);

        $param = [
            'name' => 'バロック',
            'begin_min' => 1600,
            'begin_max' => null,
            'end_min' => 1760,
            'end_max' => null,
            'description' => 'バロック音楽（バロックおんがく）は、ヨーロッパにおける17世紀初頭から18世紀半ばまでの音楽の総称である。この時代はルネサンス音楽と古典派音楽の間に位置する。',
            'genre_id' => null,
        ];
        DB::table('periods')->insert($param);

        $param = [
            'name' => '古典派',
            'begin_min' => 1730,
            'begin_max' => null,
            'end_min' => 1820,
            'end_max' => null,
            'description' => '理性を重視する啓蒙時代を背景に[1]楽曲の均斉感と合理的な展開が重視され、ソナタ形式が発展した。また機能和声法が確立され、調性が教会旋法から独立した。この時代の代表的な楽種として、交響曲や協奏曲、ピアノソナタや弦楽四重奏曲などが盛んに作られた。',
            'genre_id' => null,
        ];
        DB::table('periods')->insert($param);

        $param = [
            'name' => 'ロマン派',
            'begin_min' => 1780,
            'begin_max' => null,
            'end_min' => 1910,
            'end_max' => null,
            'description' => '18世紀のヨーロッパを支配していた啓蒙主義は、理性を偏重し過ぎ、伝統を軽視する傾向があったため、19世紀になると、それに対する反動としてロマン主義が生まれた。冷徹な理性よりも、人間に本来自然に備わっている感情を重視し、それを空想的、夢幻的、牧歌的な世界への憧れという形で表現した。',
            'genre_id' => null,
        ];
        DB::table('periods')->insert($param);

        $param = [
            'name' => '近代',
            'begin_min' => 1900,
            'begin_max' => null,
            'end_min' => 2000,
            'end_max' => null,
            'description' => '20世紀の音楽は、敵対的な政治情勢、テクノロジーの進歩、スタイルの大幅な変化により、劇的に変化。エルガー、ブリテンからストラヴィンスキー、ガーシュウィン、ジョンウィリアムズに至るまでの作曲家によって開拓された。',
            'genre_id' => null,
        ];
        DB::table('periods')->insert($param);
    }
}
