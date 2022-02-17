<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\belepes;

class AlkalmazottFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $belepesId = belepes::all()->random();
        return [
            'belepes_id'=> $belepesId->id,
            'szul_nev'=> $this->faker->name,
            'szul_hely'=> $this->faker->city,
            'szul_ido'=> $this->faker->date,
            'anyja_neve'=> $this->faker->name,
            'adoazon_jel'=> $this->faker->numberBetween(5),
            'tajszam'=> $this->faker->numberBetween(10),
            'nem'=> $this->faker->boolean,
            'nev'=> $this->faker->name,
            'banszamla_szam'=> $this->faker->boolean,
            'telefonszam'=> $this->faker->phoneNumber,
            'allando_lakhely'=> $this->faker->address,
            'tartozkodasi_hely'=> $this->faker->address,
            'hazas_e'=> $this->faker->boolean,
            'tizenhat_alatti_gyermek'=> $this->faker->numberBetween(10),
            'all_polgarsag'=> $this->faker->country
        ];
    }
}
