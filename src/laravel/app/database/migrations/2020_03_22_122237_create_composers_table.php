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
            $table->string('name')->comment('日本名')->nullable();
            $table->string('name_origin')->comment('現地名')->nullable();
            $table->integer('birth_at')->nullable();
            $table->integer('death_at')->nullable();
            $table->string('icon_url')->nullable();
            $table->string('description')->nullable();
            $table->integer('country_id')->nullable();
            $table->integer('period_id')->nullable();
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
        Schema::dropIfExists('composers');
    }
}
