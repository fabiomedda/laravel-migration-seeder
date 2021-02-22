<?php

use Illuminate\Database\Seeder;
use App\Department;


class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $department_list = config('depart');

        foreach ($department_list as $dep) {
            $newDep = new Department();
            $newDep->name = $dep['name'];
            $newDep->typology = $dep['typology'];
            $newDep->save();
        }

    }
}
