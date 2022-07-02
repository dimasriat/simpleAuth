<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPenelitiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_peneliti', function (Blueprint $table) {
            $table->id();
            $table->string('nidn');
            $table->string('scopus_id');
            $table->string('scholar_id');
            $table->integer('id_unit');
            $table->integer('id_jenis_kelamin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_peneliti');
    }
}
