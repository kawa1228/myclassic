<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Libs\File\FileUtil;

class DatabaseComposersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $path = database_path('seeds/data/composers.tsv');
        $composers = FileUtil::getTsvAsArray($path, true);

        foreach ($composers as $composer) {
            DB::table('composers')->insert($composer);
        }
    }
}
