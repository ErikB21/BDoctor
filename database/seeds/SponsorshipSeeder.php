<?php

use App\Sponsorship;
use Illuminate\Database\Seeder;

class SponsorshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sponsorships = [
            [
                'name' => 'Base',
                'duration' => 24,
                'price' => 2.99
            ],
            [
                'name' => 'Medium',
                'duration' => 72,
                'price' => 5.99
            ],
            [
                'name' => 'Pro',
                'duration' => 144,
                'price' => 9.99
            ],
        ];
        foreach ($sponsorships as $sponsorship) {
            $newSponsorship = new Sponsorship();
            $newSponsorship->name = $sponsorship['name'];
            $newSponsorship->duration = $sponsorship['duration'];
            $newSponsorship->price = $sponsorship['price'];
            $newSponsorship->save();
        }
    }
}



