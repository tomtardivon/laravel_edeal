<?php

namespace Database\Factories;

use App\Models\Piece;
use Illuminate\Database\Eloquent\Factories\Factory;

class PieceFactory extends Factory
{


    protected $model =  Piece::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
       
        return [            
            'nom_piece'=> $this->faker->name(),
            'description_piece'=> $this->faker->paragraph(),               
        ];
    }
}
