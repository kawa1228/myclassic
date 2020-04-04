<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Libs\File\FileUtil;

class DatabaseProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $path = database_path('seeds/data/products.tsv');
        $products = FileUtil::getTsvAsArray($path, true);

        foreach ($products as $product) {
            DB::table('products')->insert($product);
        }
    }
}
