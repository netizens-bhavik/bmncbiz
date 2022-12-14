<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class countries extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = file_get_contents('https://raw.githubusercontent.com/lukes/ISO-3166-Countries-with-Regional-Codes/master/all/all.json');
        //decode json data to array
        $data = json_decode($json, true);
//loop through the array
        foreach ($data as $key => $value) {
            $country = new \App\Models\Countries();
            $country->name = $value['name']??null;
            $country->alpha2 = $value['alpha-2']??null;
            $country->alpha3 = $value['alpha-3']??null;
            $country->country_code = $value['country-code']??null;
            $country->iso_3166_2 = $value['iso_3166-2']??null;
            $country->region = $value['region']??null;
            $country->region_code = $value['region-code']??null;
            $country->sub_region = $value['sub-region']??null;
            $country->sub_region_code = $value['sub-region-code']??null;
            $country->intermediate_region = $value['intermediate-region']??null;
            $country->intermediate_region_code = $value['intermediate-region-code']??null;
            $country->save();
        }
    }
}
