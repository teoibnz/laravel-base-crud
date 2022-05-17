<?php
use App\Comic;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run(Faker $faker)
    {
        for ( $i =0; $i > 50; $i++){
            $newComic = new Comic();
            $newComic->name = $faker->word();
            $newComic->editor = $faker->name();
            $newComic->author = $faker->name();
            $newComic->price = $faker->randomFloat(1, 20, 30);
            $newComic->cover_url = $faker->imageUrl(360, 360, 'comics', true, 'comic');
            $newComic->save();
        }
    }
}
