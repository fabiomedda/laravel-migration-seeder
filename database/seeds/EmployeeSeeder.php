<?php

use Illuminate\Database\Seeder;
use App\Employee;

use Faker\Generator as Faker;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //

        for ($i=0; $i < 10; $i++) {
            $newEmp = new Employee();
            $newEmp->fullname = $faker->name;
            $newEmp->role = $faker->word;
            $newEmp->save();
        }
    }
}
