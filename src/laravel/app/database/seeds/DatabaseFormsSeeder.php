<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseFormsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'ソナタ',
            'name_origin' => 'Sonata',
            'description' => '器楽曲、室内楽曲の形式の一つで多くは複数楽章から構成される。',
        ];
        DB::table('forms')->insert($param);

        $param = [
            'name' => '交響曲',
            'name_origin' => 'Symphony',
            'description' => '管弦楽によって演奏される多楽章構成の大規模な楽曲である。シンフォニー、シンフォニア（伊: Sinfonia）とも呼ばれる。',
        ];
        DB::table('forms')->insert($param);

        $param = [
            'name' => '協奏曲',
            'name_origin' => 'Concert',
            'description' => '主として一つまたは複数の独奏楽器（群）と管弦楽によって演奏される多楽章からなる楽曲を指す。',
        ];
        DB::table('forms')->insert($param);
    }
}
