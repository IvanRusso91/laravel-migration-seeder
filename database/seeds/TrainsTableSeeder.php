<?php
use App\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0 ; $i<20 ; $i++){
            $new_train= new Train();
            $new_train->name = $faker->company();
            $new_train->departure_station = $faker->city();
            $new_train->arrival_station = $faker->city();
            $new_train->Orario_di_partenza = $faker->time();
            $new_train->Orario_di_arrivo = $faker->time();
            $new_train->Codice_Treno = $faker->numberBetween(999, 9999);
            $new_train->Numero_carrozza = $faker->numberBetween(1, 30);
            $new_train->in_orario = $faker->boolean();
            $new_train->cancellato = $faker->boolean();
            $new_train->save();
        }
    }
}
