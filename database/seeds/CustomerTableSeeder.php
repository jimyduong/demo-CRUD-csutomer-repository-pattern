<?php

use App\Customer;
use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer = new Customer();
        $customer->first_name = 'David';
        $customer->last_name = 'Connor';
        $customer->save();

        $customer = new Customer();
        $customer->first_name = 'Marry';
        $customer->last_name = 'Connor';
        $customer->save();
    }
}
