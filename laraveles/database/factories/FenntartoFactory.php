<?php

namespace Database\Factories;

use App\Models\fenntarto;
use Illuminate\Database\Eloquent\Factories\Factory;


class FenntartoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = fenntarto::class;
    public function definition()
    {
        return [
            'nev'=> $this->faker->name,
            'szekhely'=>$this->faker->city,
            'agazati_azon'=> $this->faker->numberBetween(10),
            'kepviselo'=> $this->faker->name,
            'adoszam'=> $this->faker->numberBetween(10),
            'megye'=> $this->faker->city,
            'cegjegyzekszam'=> $this->faker->numberBetween(10),
            'statisztikaiszam'=> $this->faker->numberBetween(10),
            'illetekes_kormányh'=> $this->faker->city,
            'bolcsodek_szama'=> $this->faker->numberBetween(10),
            'uzemorvos_nev'=> $this->faker->name,
            'uzemorvos_cim'=> $this->faker->title,
            'uzemorvos_telefonszam'=> $this->faker->phoneNumber,
          
        ];
    }
}
