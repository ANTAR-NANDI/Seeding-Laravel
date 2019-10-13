<?php

use Illuminate\Database\Seeder;

class TeacherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('teachers')->insert([
        //     'name' => Str::random(10),
        //     'email' => Str::random(10).'@gmail.com',
        //     'address'=>'Rowfabad',
        //     'country'=>'Bangladesh',
        //     'city'=>'Chittagong',
        //     'salary'=>10000,
        //     'credit_card_no'=>'009-0481',
        //     'birth_date' => '1997-10-02'
        // ]);
        factory(App\Teacher::class,100)->create();
    }
}
