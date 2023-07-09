<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Auth;

class ContactFactory extends Factory
{
    protected $model = Contact::class;

    public function definition()
    {
        return [
            'name'      => $this->faker->name,
            'email'     => $this->faker->email,
            'phone'     => $this->faker->phoneNumber,
            'user_id'   => Auth::id()
        ];
    }
}
