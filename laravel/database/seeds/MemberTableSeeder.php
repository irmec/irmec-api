<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class MemberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		
		$faker = Faker\Factory::create();
		
		$limit = 50;
		
		for($i=0;$i<$limit;$i++){
			DB::table('members')->insert([
				'lastname'=>$faker->lastname,
				'firstname'=>$faker->firstname,
				'middlename'=>$faker->lastname,
				'cell_phone'=>$faker->phoneNumber,
				'address'=>$faker->address,
				'baptismal_date'=> $faker->dateTimeThisCentury->format('Y-m-d')		
			]);
		}
    }
}
