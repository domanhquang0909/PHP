<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

     protected $model = User::class;
    public function definition()
    {
        return [
             'mail_address' => $this->faker->safeEmail(),
             'password' =>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
             'name' =>$this->faker->name,
             'address'=>'Vĩnh Phúc',
             'phone'=> '0326032081',
        ];
    }
}
