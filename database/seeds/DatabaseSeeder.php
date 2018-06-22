<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        DB::table('ingredientes')->insert(
            [
                [
                    'id' => 1,
                    'nombre' => 'Tequila',
                    'tipo' => 'ml',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id' => 2,
                    'nombre' => 'Azucar',
                    'tipo' => 'g',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id' => 3,
                    'nombre' => 'Triple Sec',
                    'tipo' => 'ml',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id' => 4,
                    'nombre' => 'Zumo de limon',
                    'tipo' => 'ml',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id' => 5,
                    'nombre' => 'Ron',
                    'tipo' => 'ml',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id' => 6,
                    'nombre' => 'Hierbabuena',
                    'tipo' => 'g',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id' => 7,
                    'nombre' => 'Limon',
                    'tipo' => 'g',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id' => 8,
                    'nombre' => 'Agua con gas',
                    'tipo' => 'ml',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id' => 9,
                    'nombre' => 'Vodka',
                    'tipo' => 'ml',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id' => 10,
                    'nombre' => 'Licor de durazno',
                    'tipo' => 'ml',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id' => 11,
                    'nombre' => 'Zumo de naranja',
                    'tipo' => 'ml',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id' => 12,
                    'nombre' => 'Jugo de arandano',
                    'tipo' => 'ml',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id' => 13,
                    'nombre' => 'Zumo de lima',
                    'tipo' => 'ml',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id' => 14,
                    'nombre' => 'Jarabe de granadina',
                    'tipo' => 'ml',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id' => 15,
                    'nombre' => 'Cereza',
                    'tipo' => 'g',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id' => 16,
                    'nombre' => 'Aceituna',
                    'tipo' => 'g',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id' => 17,
                    'nombre' => 'Licor de cafe',
                    'tipo' => 'ml',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id' => 18,
                    'nombre' => 'Baileys',
                    'tipo' => 'ml',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id' => 19,
                    'nombre' => 'Crema de cacao',
                    'tipo' => 'ml',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id' => 20,
                    'nombre' => 'Crema de leche',
                    'tipo' => 'g',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id' => 21,
                    'nombre' => 'Brandy',
                    'tipo' => 'ml',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id' => 22,
                    'nombre' => 'Blue curacao',
                    'tipo' => 'ml',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id' => 23,
                    'nombre' => 'Crema de coco',
                    'tipo' => 'ml',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id' => 24,
                    'nombre' => 'Leche condensada',
                    'tipo' => 'g',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id' => 25,
                    'nombre' => 'Cafe',
                    'tipo' => 'g',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id' => 26,
                    'nombre' => 'Leche',
                    'tipo' => 'ml',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id' => 27,
                    'nombre' => 'Milo',
                    'tipo' => 'g',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
            ]
        );

        DB::table('unidades')->insert(
            [
                [
                    'id_ingrediente' => 1,
                    'fecha_ingreso' => date('Y-m-d'),
                    'fecha_vencimiento' => '2019-01-03',
                    'cantidad' => 2250,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_ingrediente' => 2,
                    'fecha_ingreso' => date('Y-m-d'),
                    'fecha_vencimiento' => '2019-05-03',
                    'cantidad' => 10000,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_ingrediente' => 3,
                    'fecha_ingreso' => date('Y-m-d'),
                    'fecha_vencimiento' => '2019-05-03',
                    'cantidad' => 1500,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_ingrediente' => 4,
                    'fecha_ingreso' => date('Y-m-d'),
                    'fecha_vencimiento' => '2019-05-03',
                    'cantidad' => 1000,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_ingrediente' => 5,
                    'fecha_ingreso' => date('Y-m-d'),
                    'fecha_vencimiento' => '2019-05-03',
                    'cantidad' => 750,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_ingrediente' => 6,
                    'fecha_ingreso' => date('Y-m-d'),
                    'fecha_vencimiento' => '2019-05-03',
                    'cantidad' => 20,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_ingrediente' => 7,
                    'fecha_ingreso' => date('Y-m-d'),
                    'fecha_vencimiento' => '2019-05-03',
                    'cantidad' => 500,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_ingrediente' => 8,
                    'fecha_ingreso' => date('Y-m-d'),
                    'fecha_vencimiento' => '2019-05-03',
                    'cantidad' => 4800,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_ingrediente' => 9,
                    'fecha_ingreso' => date('Y-m-d'),
                    'fecha_vencimiento' => '2019-05-03',
                    'cantidad' => 2250,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_ingrediente' => 10,
                    'fecha_ingreso' => date('Y-m-d'),
                    'fecha_vencimiento' => '2019-05-03',
                    'cantidad' => 1400,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_ingrediente' => 11,
                    'fecha_ingreso' => date('Y-m-d'),
                    'fecha_vencimiento' => '2019-05-03',
                    'cantidad' => 3000,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_ingrediente' => 12,
                    'fecha_ingreso' => date('Y-m-d'),
                    'fecha_vencimiento' => '2019-05-03',
                    'cantidad' => 1890,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_ingrediente' => 13,
                    'fecha_ingreso' => date('Y-m-d'),
                    'fecha_vencimiento' => '2019-05-03',
                    'cantidad' => 2000,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_ingrediente' => 14,
                    'fecha_ingreso' => date('Y-m-d'),
                    'fecha_vencimiento' => '2019-05-03',
                    'cantidad' => 1000,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_ingrediente' => 15,
                    'fecha_ingreso' => date('Y-m-d'),
                    'fecha_vencimiento' => '2019-05-03',
                    'cantidad' => 1000,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_ingrediente' => 16,
                    'fecha_ingreso' => date('Y-m-d'),
                    'fecha_vencimiento' => '2019-05-03',
                    'cantidad' => 300,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_ingrediente' => 17,
                    'fecha_ingreso' => date('Y-m-d'),
                    'fecha_vencimiento' => '2019-05-03',
                    'cantidad' => 750,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_ingrediente' => 18,
                    'fecha_ingreso' => date('Y-m-d'),
                    'fecha_vencimiento' => '2019-05-03',
                    'cantidad' => 700,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_ingrediente' => 19,
                    'fecha_ingreso' => date('Y-m-d'),
                    'fecha_vencimiento' => '2019-05-03',
                    'cantidad' => 130,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_ingrediente' => 20,
                    'fecha_ingreso' => date('Y-m-d'),
                    'fecha_vencimiento' => '2019-05-03',
                    'cantidad' => 400,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_ingrediente' => 21,
                    'fecha_ingreso' => date('Y-m-d'),
                    'fecha_vencimiento' => '2019-05-03',
                    'cantidad' => 750,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_ingrediente' => 22,
                    'fecha_ingreso' => date('Y-m-d'),
                    'fecha_vencimiento' => '2019-05-03',
                    'cantidad' => 750,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_ingrediente' => 23,
                    'fecha_ingreso' => date('Y-m-d'),
                    'fecha_vencimiento' => '2019-05-03',
                    'cantidad' => 425,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_ingrediente' => 24,
                    'fecha_ingreso' => date('Y-m-d'),
                    'fecha_vencimiento' => '2019-05-03',
                    'cantidad' => 2250,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_ingrediente' => 25,
                    'fecha_ingreso' => date('Y-m-d'),
                    'fecha_vencimiento' => '2019-05-03',
                    'cantidad' => 5000,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_ingrediente' => 26,
                    'fecha_ingreso' => date('Y-m-d'),
                    'fecha_vencimiento' => '2019-05-03',
                    'cantidad' => 6000,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_ingrediente' => 27,
                    'fecha_ingreso' => date('Y-m-d'),
                    'fecha_vencimiento' => '2019-05-03',
                    'cantidad' => 1000,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
            ]
        );
        DB::table('productos')->insert(
            [
                [
                    'id' => 1,
                    'nombre' => 'Margarita',
                    'precio' => 14000.00,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id' => 2,
                    'nombre' => 'Mojito',
                    'precio' => 14000.00,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id' => 3,
                    'nombre' => 'Sex on the beach',
                    'precio' => 16000.00,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id' => 4,
                    'nombre' => 'Daiquiri',
                    'precio' => 14000.00,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id' => 5,
                    'nombre' => 'Tequila sunrise',
                    'precio' => 14000.00,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id' => 6,
                    'nombre' => 'Martini',
                    'precio' => 16000.00,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id' => 7,
                    'nombre' => 'Cosmopolitan',
                    'precio' => 14000.00,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id' => 8,
                    'nombre' => 'Ruso blanco',
                    'precio' => 14000.00,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id' => 9,
                    'nombre' => 'Ruso negro',
                    'precio' => 14000.00,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id' => 10,
                    'nombre' => 'Alexander',
                    'precio' => 16000.00,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id' => 11,
                    'nombre' => 'Orgasmo pitufo',
                    'precio' => 8000.00,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id' => 12,
                    'nombre' => 'Capuccino baileys',
                    'precio' => 6000.00,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id' => 13,
                    'nombre' => 'Milo',
                    'precio' => 4500.00,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
            ]
        );

        DB::table('recetas')->insert(
            [
                [
                    'id_producto' => 1,
                    'id_ingrediente' => 1,
                    'cantidad' => 60,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_producto' => 1,
                    'id_ingrediente' => 2,
                    'cantidad' => 4,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_producto' => 1,
                    'id_ingrediente' => 3,
                    'cantidad' => 30,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_producto' => 1,
                    'id_ingrediente' => 4,
                    'cantidad' => 30,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_producto' => 2,
                    'id_ingrediente' => 5,
                    'cantidad' => 60,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_producto' => 2,
                    'id_ingrediente' => 6,
                    'cantidad' => 4,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_producto' => 2,
                    'id_ingrediente' => 7,
                    'cantidad' => 50,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_producto' => 2,
                    'id_ingrediente' => 2,
                    'cantidad' => 40,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_producto' => 2,
                    'id_ingrediente' => 8,
                    'cantidad' => 80,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_producto' => 3,
                    'id_ingrediente' => 9,
                    'cantidad' => 15,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_producto' => 3,
                    'id_ingrediente' => 10,
                    'cantidad' => 22,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_producto' => 3,
                    'id_ingrediente' => 11,
                    'cantidad' => 15,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_producto' => 3,
                    'id_ingrediente' => 12,
                    'cantidad' => 15,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_producto' => 4,
                    'id_ingrediente' => 5,
                    'cantidad' => 45,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_producto' => 4,
                    'id_ingrediente' => 13,
                    'cantidad' => 30,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_producto' => 4,
                    'id_ingrediente' => 2,
                    'cantidad' => 50,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_producto' => 5,
                    'id_ingrediente' => 1,
                    'cantidad' => 5,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_producto' => 5,
                    'id_ingrediente' => 11,
                    'cantidad' => 100,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_producto' => 5,
                    'id_ingrediente' => 14,
                    'cantidad' => 5,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_producto' => 5,
                    'id_ingrediente' => 15,
                    'cantidad' => 10,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_producto' => 6,
                    'id_ingrediente' => 9,
                    'cantidad' => 30,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_producto' => 6,
                    'id_ingrediente' => 16,
                    'cantidad' => 10,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_producto' => 6,
                    'id_ingrediente' => 3,
                    'cantidad' => 10,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_producto' => 7,
                    'id_ingrediente' => 3,
                    'cantidad' => 15,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_producto' => 7,
                    'id_ingrediente' => 9,
                    'cantidad' => 60,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_producto' => 7,
                    'id_ingrediente' => 12,
                    'cantidad' => 30,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_producto' => 7,
                    'id_ingrediente' => 4,
                    'cantidad' => 30,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_producto' => 8,
                    'id_ingrediente' => 9,
                    'cantidad' => 60,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_producto' => 8,
                    'id_ingrediente' => 17,
                    'cantidad' => 30,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_producto' => 8,
                    'id_ingrediente' => 18,
                    'cantidad' => 15,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_producto' => 9,
                    'id_ingrediente' => 9,
                    'cantidad' => 60,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_producto' => 9,
                    'id_ingrediente' => 17,
                    'cantidad' => 30,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_producto' => 10,
                    'id_ingrediente' => 19,
                    'cantidad' => 30,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_producto' => 10,
                    'id_ingrediente' => 2,
                    'cantidad' => 40,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_producto' => 10,
                    'id_ingrediente' => 20,
                    'cantidad' => 30,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_producto' => 10,
                    'id_ingrediente' => 21,
                    'cantidad' => 60,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_producto' => 11,
                    'id_ingrediente' => 9,
                    'cantidad' => 10,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_producto' => 11,
                    'id_ingrediente' => 22,
                    'cantidad' => 10,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_producto' => 11,
                    'id_ingrediente' => 23,
                    'cantidad' => 10,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_producto' => 12,
                    'id_ingrediente' => 24,
                    'cantidad' => 10,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_producto' => 12,
                    'id_ingrediente' => 18,
                    'cantidad' => 10,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_producto' => 12,
                    'id_ingrediente' => 25,
                    'cantidad' => 8,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_producto' => 12,
                    'id_ingrediente' => 26,
                    'cantidad' => 120,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_producto' => 13,
                    'id_ingrediente' => 27,
                    'cantidad' => 54,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_producto' => 13,
                    'id_ingrediente' => 26,
                    'cantidad' => 240,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_producto' => 13,
                    'id_ingrediente' => 2,
                    'cantidad' => 30,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
            ]
        );
        DB::table('mesas')->insert(
            [
                [
                    'mesa' => 1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'mesa' => 2,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'mesa' => 3,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'mesa' => 4,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],

            ]
        );
    }
}
