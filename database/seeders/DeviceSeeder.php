<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Device;
use App\Models\ConfigHeater;
use App\Models\ConfigLamp;

class DeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Device::create([
            'id' =>'1',
            'user_id' => 1,
            'name'=>'Kandang Ayam 1-7 Hari'
        ]);
        Device::create([
            'id' =>'2',
            'user_id' => 1,
            'name'=>'Kandang Ayam 8-15 Hari'
        ]);
        Device::create([
            'id' =>'3',
            'user_id' => 1,
            'name'=>'Kandang Ayam 16-21 Hari'
        ]);
        Device::create([
            'id' =>'4',
            'user_id' => 1,
            'name'=>'Kandang Ayam 22-28 Hari'
        ]);
        Device::create([
            'id' =>'5',
            'user_id' => 1,
            'name'=>'Kandang Ayam 29-35 Hari'
            
        ]);
        Device::create([
            'id' =>'6',
            'user_id' => 1,
            'name'=>'Kandang Ayam 36-49 Hari'
            
        ]);


        ConfigHeater::create([
            'device_id'=>'1',
            'max_temp' => 27,
            'min_temp' => 19,
 
        ]);
 

        ConfigLamp::create([
            'device_id'=>'1',
            'time_on' =>'00:19:00',
            'time_off' =>'00:05:00',
  
        ]);
        ConfigLamp::create([
            'device_id'=>'2',
            'time_on' =>'00:17:00',
            'time_off' =>'00:06:00',
  
        ]);
    }
}
