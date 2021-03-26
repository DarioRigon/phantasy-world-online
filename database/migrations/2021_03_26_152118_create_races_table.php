<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('races', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("description");
            $table->unsignedInteger("hp");
            $table->unsignedInteger("tp");
            $table->unsignedInteger("atp");
            $table->unsignedInteger("dfp");
            $table->unsignedInteger("mst");
            $table->unsignedInteger("ata");
            $table->unsignedInteger("evp");
            $table->unsignedInteger("lck");
            $table->boolean("can_use_techs");
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
        Schema::dropIfExists('races');
    }
}
