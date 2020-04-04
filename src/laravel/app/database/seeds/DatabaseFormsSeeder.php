<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Libs\File\FileUtil;

class DatabaseFormsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $path = database_path('seeds/data/forms.tsv');
        $forms = FileUtil::getTsvAsArray($path, true);

        foreach ($forms as $form) {
            DB::table('forms')->insert($form);
        }
    }
}
