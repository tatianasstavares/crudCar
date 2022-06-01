<?php

use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands = ["Toyota", "chevrolet", "Ford", "Nissan", "Fiat", "Audi"];

        foreach ($brands as $brand) {
            \DB::table('brands')->insert(
                [
                    'name'     => $brand,
                    'created_at' => now(),
                    'updated_at' => now(),
                    // 'deleted_at' =>now()
                ]
            );
        }
    }
}
