<?php

namespace Database\Seeders\Company;

use App\Models\Company\ClientCompany;
use Illuminate\Database\Seeder;

class ClientCompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ClientCompany::factory()->count(20)->create();
    }
}
