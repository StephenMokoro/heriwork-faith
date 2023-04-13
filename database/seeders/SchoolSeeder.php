<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $schools = [
            ['school_name' => 'Strathmore University'],
            ['school_name' => 'University of Nairobi'],
            ['school_name' => 'Moi University'],
            ['school_name' => 'Mount Kenya University'],
            ['school_name' => 'Daystar University'],
            ['school_name' => 'Zetech University'],
            ['school_name' => 'Murang\'a University'],
            ['school_name' => 'Jomo Kenyatta University'],
            ['school_name' => 'Pwani University'],
            ['school_name' => 'Meru University'],
            ['school_name' => 'Masinde Muliro University'],
            ['school_name' => 'Maseno'],
            ['school_name' => 'African Nazarine university'],
            ['school_name' => 'Catholic of Eastern Africa  University'],
            ['school_name' => 'Kenya Methodist University'],


            // Add more schools here as needed
        ];
    
        foreach ($schools as $school) {
            DB::table('schools')->insert($school);
        }
    
    }
}