<?php

use App\Vendor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create admin
        Vendor::updateOrCreate([
            'name' => 'vendor',
            'email' => 'vendor@gmail.com',
            'password' => Hash::make('123456')
        ]);
    }
}
