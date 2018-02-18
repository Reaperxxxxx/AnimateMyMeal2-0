<?php

use Illuminate\Database\Seeder;
use \App\Device;

class DeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $device = new Device();
        $device->id_restaurant = "1";
        //$device->id_employee = "0";
        $device->save();

        $device2 = new Device();
        $device2->id_restaurant = "1";
        //$device->id_employee = "0";
        $device2->save();

        $device3 = new Device();
        $device3->id_restaurant = "1";
        //$device->id_employee = "0";
        $device3->save();
    }
}
