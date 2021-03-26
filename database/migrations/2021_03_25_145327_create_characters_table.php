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
            $table->string("race_id")->default(1);
            $table->string("identification_id")->default(1);

            $table->unsignedInteger("hp")->default(0);
            $table->unsignedInteger("tp")->default(0);
            $table->unsignedInteger("atp")->default(0);
            $table->unsignedInteger("dfp")->default(0);
            $table->unsignedInteger("mst")->default(0);
            $table->unsignedInteger("ata")->default(0);
            $table->unsignedInteger("evp")->default(0);
            $table->unsignedInteger("lck")->default(0);

            $table->unsignedBigInteger("exp")->default(0);

            $table->boolean("isActive")->default(false);
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
