<?php

use Illuminate\Database\Seeder;

class testSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $arr = [];

        for($i=0;$i<=20;$i++){
        	$tem = [];
        	$tem['username'] = str_random(20);
        	$tem['password'] = str_random(20);
        	$tem['group_id'] = rand(1,10);
        	$tem['email'] = rand(100000,999999).'@qq.com';
        	$tem['sex'] = rand(0,1);
        	
        	$arr[] = $tem;
        }
        DB::table('test')->insert($arr);
    }
}
