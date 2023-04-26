<?php

namespace Database\Factories\Company;

use App\Enums\ClientCompany\SystemOperationEnum;
use App\Models\Company\ClientCompany;
use App\Models\SystemUser;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class ClientCompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ClientCompany::class;

    public function definition(): array
    {
        $url = $this->faker->url;
        $trimUrl = strlen($url) > 99 ? substr($url, 0, 95) . "..." : $url;
        $userIds = SystemUser::query()->get('id')->pluck('id')->toArray();
        return [
            //
            'name' => $this->faker->company,
            'operation_classification' => SystemOperationEnum::TRIAL,
            'date_start' => $this->faker->dateTimeBetween($startDate = 'now', $endDate = '+1 months'),
            'date_end' => $this->faker->dateTimeBetween($startDate = '+1 months', $endDate = '+6 months'),
            'bill_to' => $this->faker->address,
            'in_charge_name' => $this->faker->name,
            'in_charge_tel' => $this->faker->numerify('#############'),
            'in_charge_email' => $this->faker->email,
            'created_by' => Arr::random($userIds),
            'updated_by' => Arr::random($userIds),
            'created_at' => $this->faker->dateTimeBetween($startDate = 'now', $endDate = '+1 months'),
            'updated_at' => $this->faker->dateTimeBetween($startDate = 'now', $endDate = '+2 months')
        ];
    }
}
