<?php

namespace Database\Seeders;

use App\Models\Config;
use Illuminate\Database\Seeder;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Config::create(["label" => "min_year", "value" => 15]);
        Config::create(["label" => "cantidate_cautious", "value" => 30000]);
        Config::create(["label" => "entreprise_cautious", "value" => 20000]);
        Config::create(["label" => "linkedin", "value" => null]);
        Config::create(["label" => "facebook", "value" => null]);
        Config::create(["label" => "tweeter", "value" => null]);
    }
}
