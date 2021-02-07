<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'id' => '1',
            'name' => 'CoSpaceHub',
            'email' => 'cospacehub@gmail.com',
            'phone' => '+8801303062727',
            'address' => 'Dhaka City College',
            'footer' => '@CoSpaceHub Dhaka',
            'aboutus' => 'Korem Ipsum BD DHaka Is My COmpany',
            'facebook' => 'https://facebook.com/Zeba',
            'twitter' => 'https://facebook.com/Zeba',
            'linkedin' => 'https://facebook.com/Zeba',
            
        ]);
    }
}
