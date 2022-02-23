<?php

namespace Database\Factories;

use App\Models\belepes;
use App\Models\fenntarto;
use Illuminate\Database\Eloquent\Factories\Factory;


class BolcsodeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $fenntIdrandom = fenntarto::all()->random();
        $adminRandom = belepes::all()->random();
        return [
            'cim'=> $this->faker->address,
            'nev' => $this->faker->name,
            'agazati_azon'=> $this->faker->numberBetween(5),
            'szgyf_kod'=> $this->faker->numberBetween(7),
            'ferohelyek_szama'=> $this->faker->numberBetween(100),
            'feor'=> $this->faker->numberBetween(3),
            'agazati_potlek'=> $this->faker->numberBetween(1000),
            'fennt_id'=>  $fenntIdrandom->id,
            'bolcsode_admin'=> $adminRandom->jogosultsags,
            'aktiv'=>$this->faker->numberBetween(2)
        ];
    }
}
