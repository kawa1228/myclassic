<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Libs\File\FileUtil;

class DatabaseCountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $path = database_path('seeds/data/countries.tsv');
        $countries = FileUtil::getTsvAsArray($path, true);

        foreach ($countries as $country) {
            DB::table('countries')->insert($country);
        }
    }
}
