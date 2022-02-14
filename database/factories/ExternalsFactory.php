<?php

namespace Database\Factories;

use App\Externals;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExternalsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Externals::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'department' => $this->faker->text,
            'office' => $this->faker->text,
            'div_unit' => $this->faker->text,
            'personnel' => $this->faker->text,
            'doc_class' => $this->faker->text,
            'doc_type' => $this->faker->text,
            'subject' => $this->faker->text,
            'mode_of_trans' => $this->faker->text,
            's_profile' => $this->faker->text,
            's_name' => $this->faker->text,
            's_address' => $this->faker->text,
            's_email' => $this->faker->text,
            's_contact' => $this->faker->text,
            'received_by' => $this->faker->text,
            'comment' => $this->faker->text,
            'date_received' => $this->faker->text,
            'time_received' => $this->faker->text,
            'created_by' => $this->faker->text,
            'created_by_user_id' => $this->faker->text,
            'created_by_department' => $this->faker->text,
            'created_by_office' => $this->faker->text,
            'created_by_div_unit' => $this->faker->text,
        ];
    }
}
