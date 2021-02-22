<?php

use Illuminate\Database\Seeder;
use App\Company;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $company_list = [
            [
                'name' => 'asdrt',
                'sector' => 'fweras'
            ],
            [
                'name' => 'vergsf',
                'sector' => 'asdjhrt'
            ],
            [
                'name' => 'xctfg',
                'sector' => 'iyktdrg'
            ],
            [
                'name' => 'rbyvvy',
                'sector' => 'ngtcxgfg'
            ],
        ];

        foreach ($company_list as $com) {
            $newCom = new Company();
            $newCom->name = $com['name'];
            $newCom->sector = $com['sector'];
            $newCom->save();
        }

    }
}
