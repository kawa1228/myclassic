<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Composer;

class CreateComposersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('composers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('name_jp')->comment('日本名')->nullable();
            $table->string('name_origin')->comment('現地名')->nullable();
            $table->increments('birth_year')->nullable();
            $table->increments('death_year')->nullable();
            $table->string('icon_url')->nullable();
            $table->string('home_city')->comment('出身地')->nullable();
            $table->string('description')->nullable();
            $table->increments('country_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('composers');
    }
}
