<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Libs\File\FileUtil;

class DatabasePeriodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $path = database_path('seeds/data/periods.tsv');
        $periods = FileUtil::getTsvAsArray($path, true);

        foreach ($periods as $period) {
            DB::table('periods')->insert($period);
        }
   }
}
