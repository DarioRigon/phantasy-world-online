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
                "description"=>"A female combat-type android Hunter.",
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
        Race::create(
            [
                "name"=>"Ramar",
                "description"=>"A male Ranger that excells with long-rannged weapons.",
                "hp"=>29,
                "tp"=>20,
                "atp"=>23,
                "dfp"=>13,
                "mst"=>20,
                "ata"=>80,
                "evp"=>36,
                "lck"=>10,
                "can_use_techs"=>true
            ]
        );
        Race::create(
            [
                "name"=>"Ramarl",
                "description"=>"A female Ranger that is well balanced.",
                "hp"=>29,
                "tp"=>20,
                "atp"=>23,
                "dfp"=>18,
                "mst"=>20,
                "ata"=>72,
                "evp"=>36,
                "lck"=>10,
                "can_use_techs"=>true
            ]
        );
        Race::create(
            [
                "name"=>"Racast",
                "description"=>"A bold robot Ranger for technology fans.",
                "hp"=>33,
                "tp"=>0,
                "atp"=>30,
                "dfp"=>18,
                "mst"=>0,
                "ata"=>75,
                "evp"=>31,
                "lck"=>10,
                "can_use_techs"=>false
            ]
        );

        Race::create(
            [
                "name"=>"Racaseal",
                "description"=>"Very cute Ranger android with good defense power.",
                "hp"=>31,
                "tp"=>0,
                "atp"=>25,
                "dfp"=>23,
                "mst"=>0,
                "ata"=>77,
                "evp"=>31,
                "lck"=>10,
                "can_use_techs"=>false
            ]
        );

        Race::create(
            [
                "name"=>"Fonewmn",
                "description"=>"Well balanced male Force.",
                "hp"=>27,
                "tp"=>90,
                "atp"=>16,
                "dfp"=>7,
                "mst"=>60,
                "ata"=>61,
                "evp"=>61,
                "lck"=>10,
                "can_use_techs"=>true
            ]
        );

        Race::create(
            [
                "name"=>"Fomarl",
                "description"=>"Good at support techniques female Force.",
                "hp"=>29,
                "tp"=>79,
                "atp"=>16,
                "dfp"=>10,
                "mst"=>53,
                "ata"=>63,
                "evp"=>35,
                "lck"=>10,
                "can_use_techs"=>true
            ]
        );

        Race::create(
            [
                "name"=>"Fonewearl",
                "description"=>"Limited with combat skills but extremely good at techniques female Force.",
                "hp"=>27,
                "tp"=>87,
                "atp"=>13,
                "dfp"=>13,
                "mst"=>58,
                "ata"=>61,
                "evp"=>53,
                "lck"=>10,
                "can_use_techs"=>true
            ]
        );

        Race::create(
            [
                "name"=>"Fomar",
                "description"=>"Low defence but fast male Force.",
                "hp"=>29,
                "tp"=>79,
                "atp"=>16,
                "dfp"=>10,
                "mst"=>53,
                "ata"=>63,
                "evp"=>35,
                "lck"=>10,
                "can_use_techs"=>true
            ]
        );
    }
}
