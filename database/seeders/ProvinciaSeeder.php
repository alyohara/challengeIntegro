<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Provincia;
use Illuminate\Support\Facades\DB;

class ProvinciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provincias')->insert(array(
            1 => array('id' => 19, 'description' => '3 de febrero'),
            2 => array('id' => 1, 'description' => 'Otro'),
            3 => array('id' => 2007, 'description' => 'Caba'),
            4 => array('id' => 6252, 'description' => 'Escobar'),
            5 => array('id' => 6371, 'description' => 'San Martin'),
            6 => array('id' => 6408, 'description' => 'Hurlingham'),
            7 => array('id' => 6410, 'description' => 'Ituzaingó'),
            8 => array('id' => 6412, 'description' => 'José C. Paz'),
            9 => array('id' => 6427, 'description' => 'La Matanza'),
            10 => array('id' => 6515, 'description' => 'Malvinas Argentinas'),
            11 => array('id' => 6539, 'description' => 'Merlo'),
            12 => array('id' => 6560, 'description' => 'Moreno'),
            13 => array('id' => 6568, 'description' => 'Morón'),
            14 => array('id' => 6638, 'description' => 'Pilar'),
            15 => array('id' => 6749, 'description' => 'San Fernando'),
            16 => array('id' => 6756, 'description' => 'San Isidro'),
            17 => array('id' => 6760, 'description' => 'San Miguel'),
            18 => array('id' => 6805, 'description' => 'Tigre'),
            19 => array('id' => 6840, 'description' => 'Tres de Febrero'),
            20 => array('id' => 6861, 'description' => 'Vicente López'),
        ));
    }
}
