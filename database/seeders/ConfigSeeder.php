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
        Config::create(["label" => "max_references_upload", "value" => 6]);
        Config::create(["label" => "max_realisations_upload", "value" => 6]);
        Config::create(["label" => "max_links", "value" => 6]);
        Config::create(["label" => "candidate_privacy_policy", "value" => null]);
        Config::create(["label" => "candidate_terms", "value" => null]);
        Config::create(["label" => "entreprise_privacy_policy", "value" => null]);
        Config::create(["label" => "entreprise_terms", "value" => null]);
        Config::create(["label" => "linkedin", "value" => null]);
        Config::create(["label" => "facebook", "value" => null]);
        Config::create(["label" => "twitter", "value" => null]);
    }
}
