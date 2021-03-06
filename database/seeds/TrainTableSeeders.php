<?php

use Illuminate\Database\Seeder;
use App\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 50; $i++) { 
            $newTrain = new Train();

            $newTrain->company = $faker->word();
            $newTrain->Astation = $faker->city();
            $newTrain->Dstation = $faker->city();
            $newTrain->Atime = $faker->time();
            $newTrain->Dtime = $faker->time();
            $newTrain->Adate = $faker->date();
            $newTrain->Ddate = $faker->date();
            $newTrain->TrainCode = $faker->randomNumber(5, true);
            $newTrain->carriages = rand(1, 100);

            $newTrain->save();
        }
    }
}