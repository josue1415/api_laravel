<?php

namespace Database\Seeders;

use App\Models\usuarios;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class usuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('becados_carreras')->delete();
        usuarios::create(['nivel' => 'Bachillerato General', 'opcion' => 'Bachillerato General']);
        usuarios::create(['nivel' => 'Bachillerato General', 'opcion' => 'Bachillerato General (Distancia)']);
        
    }
}
