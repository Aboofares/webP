<?php

namespace Database\Seeders;

use App\Models\Settings\accountType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class accountTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::table('account_types')->delete();

        $account_types = [
            ['en'=> 'Employee', 'ar'=> 'موظف'],
            ['en'=> 'Administrator', 'ar'=> 'إداري'],
            ['en'=> 'Client', 'ar'=> 'عميل'],
        ];
        foreach ($account_types as $account_type) {
            AccountType::create(['account_type_name' => $account_type]);
        }
    }
}
