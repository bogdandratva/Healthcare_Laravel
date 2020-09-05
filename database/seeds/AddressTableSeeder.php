<?php

use App\Models\Address;
use Illuminate\Database\Seeder;

class AddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Seed the Address Table.
     * @return void
     * @author Priyanshu Sinha <pksinha217@gmail.com>
     */

    public function run()
    {
        factory(Address::class, 25)->create();
    }
}
