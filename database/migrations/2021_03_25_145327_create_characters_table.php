<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger("user_id");
            $table->string("slot");

            $table->string("name");
            $table->string("race_id");
            $table->string("identification_id");

            $table->unsignedInteger("hp");
            $table->unsignedInteger("mp");
            $table->unsignedInteger("atp");
            $table->unsignedInteger("dfp");
            $table->unsignedInteger("mst");
            $table->unsignedInteger("ata");
            $table->unsignedInteger("evp");
            $table->unsignedInteger("lck");
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
        Schema::dropIfExists('characters');
    }
}
