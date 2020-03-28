<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->comment('日本語作品名');
            $table->string('name_origin')->comment('現地作品名')->nullable();
            $table->string('nick_name')->comment('俗称')->nullable();
            $table->string('product_code')->comment('主題目録')->nullable();
            $table->integer('recorded_year')->comment('収録時期')->nullable();
            $table->string('description')->nullable();
            $table->integer('period_id')->comment('時代id')->nullable();
            $table->integer('composer_id')->comment('作曲家id')->nullable();
            $table->integer('form_id')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
