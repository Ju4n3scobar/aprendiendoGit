<?php

namespace Database\Factories;

use App\Models\Model;
use Database\Seeders\seederUsuario;
use Illuminate\Database\Eloquent\Factories\Factory;

class usuarioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $usuario = seederUsuario::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        ];
    }
}
