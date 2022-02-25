<?php

namespace Database\Seeders;

use App\Models\Offer;
use Database\Factories\OfferFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OfferFactory::factoryForModel(Offer::class)->count(100)->create();
    }
}
