<?php

use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     //public function run()
     //{
        // for($i = 0; $i < 10; $i++){
 		//		      DB::table('areas')->insert(['descricao' => 'area'. $i]);
         //}
     //}

     public function run(){
         DB::table('areas')->insert(['descricao' => 'informatica']);
         DB::table('areas')->insert(['descricao' => 'licenciatura']);
         DB::table('areas')->insert(['descricao' => 'engenharia']);
         DB::table('areas')->insert(['descricao' => 'educacao']);
     }
}
