<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Person;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $param = [
        //     'last_name' => '一',
        //     'first_name' => '田中',
        //     'gender'=> '男性',
        //     'email' => 'coachteck@yahoo',
        //     'postcode' => '123-4567',
        //     'address' => '東京都',
        //     'building_name'=>'高橋マンション101',
        //     'opinion' => 'laravel難しい',
        // ];
        // DB::table('contacts')->insert($param);

        // $param = [
        //     'last_name' => '二',
        //     'first_name' => '鈴木',
        //     'gender' => '男性',
        //     'email' => 'coachteck@yahooo',
        //     'postcode' => '234-5678',
        //     'address' => '神奈川県',
        //     'building_name'=>'山本ビル102',
        //     'opinion' => 'laravel楽しい',
        // ];
        // DB::table('contacts')->insert($param);

        // $param = [
        //     'last_name' => '三',
        //     'first_name' => '佐藤',
        //     'gender'=> '女性',
        //     'email' => 'coachteck@yahoooo',
        //     'postcode' => '345-6789',
        //     'address' => '埼玉県',
        //     'building_name'=>'',
        //     'opinion' => 'laravel奥が深い',
        // ];
        // DB::table('contacts')->insert($param);
        
        // $param = [
        //     'last_name' => '四',
        //     'first_name' => '木村',
        //     'gender' => '女性',
        //     'email' => 'coachteck@yahooooo',
        //     'postcode' => '456-7891',
        //     'address' => '群馬県',
        //     'building_name'=>'小林マンション103',
        //     'opinion' => 'laravel勉強',
        // ];
        // DB::table('contacts')->insert($param);
    

    public function run()
    {
        People::factory()->count(31)->create();
    }

    }