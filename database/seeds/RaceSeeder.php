<?php

use Illuminate\Database\Seeder;
use App\Content\Character\Race;

class RaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Race::truncate();
        Race::create(
            [
                "name"=>"Humar",
                "description"=>"A human Hunter. Ideal for beginners.",
                "hp"=>40,
                "tp"=>29,
                "atp"=>45,
                "dfp"=>17,
                "mst"=>29,
                "ata"=>68,
                "evp"=>45,
                "lck"=>10,
                "can_use_techs"=>true
            ]
        );
        Race::create(
            [
                "name"=>"Hunewearl",
                "description"=>"A well balanced female Hunter.",
                "hp"=>38,
                "tp"=>40,
                "atp"=>40,
                "dfp"=>22,
                "mst"=>40,
                "ata"=>63,
                "evp"=>60,
                "lck"=>10,
                "can_use_techs"=>true
            ]
        );
        Race::create(
            [
                "name"=>"Hucast",
                "description"=>"A ruthless and cold robot Hunter.",
                "hp"=>44,
                "tp"=>0,
                "atp"=>45,
                "dfp"=>18,
                "mst"=>0,
                "ata"=>64,
                "evp"=>35,
                "lck"=>10,
                "can_use_techs"=>false
            ]
        );
        Race::create(
            [
                "name"=>"Hucaseal",
                "description"=>"A female combat-type android hunter.",
                "hp"=>44,
                "tp"=>0,
                "atp"=>45,
                "dfp"=>18,
                "mst"=>0,
                "ata"=>71,
                "evp"=>35,
                "lck"=>10,
                "can_use_techs"=>false
            ]
        );
    }
}
