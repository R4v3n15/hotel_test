<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        

        App\Models\General::create([
            'googleid' => '123124AJDAS',
            'nombre' => 'Riu Cancun',
            'text' => 'hola',
            'direccion' => 'kilometro 25 Zona hotelera', 
            'telefono' => 1,
            'lat' => '5852212',
            'lng' => '455652521',
            'logo' => 'default_user.png',
            'img' => 'default_user.png',
            'slug' => 'ryu-cancun',
            'estatus' => 1
        ]);
    
    }
}