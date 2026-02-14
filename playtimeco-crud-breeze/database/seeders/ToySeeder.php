<?php

namespace Database\Seeders;

use App\Models\Toy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ToySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Toy::create([
            'user_id' => 1,
            'alias' => 'The Doughman',
            'name' => 'Doey',
            'gender' => 'Male',
            'height' => 3.05,
            'weight' => 408.2,
            'subject' =>1322,
            'status' => 'Deceased',
            'creation_date' => '1950-07-29',
            'species' => 'Bigger Body',
            'description' => 'Plump dough creature, made up of a multi-colored clay-like substance.
                            Presents a friendly and rather playful demeanor but also knows how to act serious when he deems it necessary',
            'visual' => 'https://mediaproxy.tvtropes.org/width/1200/https://static.tvtropes.org/pmwiki/pub/images/ppch4_doeykeyartrender.png'
        ]);
    }
}
