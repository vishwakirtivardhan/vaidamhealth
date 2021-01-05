<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class hospitalSata extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hospitals')->insert([
            'hospital_id'=>rand(),
            'domestic_intimation_to'=>Str::random(11),
            'di_cc'=>Str::random(11),
            'di_bcc'=>Str::random(11),
            'de_email'=>Str::random(11).'@gmail.com',
            'assignee_group'=>Str::random(11),
            
            
        ]);
    }
}

