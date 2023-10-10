<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Project;

use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run(Faker $faker)
    {
        $titles = [
            [
                'name' => 'DC Comics',
                'description' => 'riproduzione del sito della DC Comics',
                'thumb' => 'https://github.com/Aranel9966/laravel-dc-comics',
                'img' => 'cartella/XjWARDnSoYaMROwbendoICGOGZC0s0Gkuy7mmR9Q.png'
            ],
            [
                'name' => 'Boolflix',
                'description' => 'Riproduzione della web app Netflix',
                'thumb' => 'https://github.com/Aranel9966/vite-boolflix',
                'img' => 'cartella/GZ8s3rtFn4rO1DoyKuob8T6Dze874DxYnHmLsZZi.png'
            ],
            [
                'name' => 'Boolzapp',
                'description' => 'riproduzione della web app di WhatsApp',
                'thumb' => 'https://github.com/Aranel9966/vue-boolzapp',
                'img' => 'cartella/L1eZMcHAIoFRWXf1to485JOUefAfxpb9sWvDfC8t.png'
            ],
            [
                'name' => 'Laravel-Boolfolio',
                'description' => 'Creazione del lato Back End con collegamento al database e gestione delle CRUD',
                'thumb' => 'https://github.com/Aranel9966/laravel-api',
                'img' => 'cartella/Wrw3ITFOlYFAKxy1VP6i9P7xvdz9oKpsLcVITLxz.png'
            ],
            [
                'name' => 'Vite-Boolfolio',
                'description' => 'Front End del mio portfolio dove mostro i miei progetti',
                'thumb' => 'https://github.com/Aranel9966/vite-boolfolio',
                'img' => 'cartella/5wiScBEbKddg0ZNl6b2xeqZknpXNQfY2PdOrrvER.png'
            ],
        ];
        foreach ($titles as $title) {
            $project = new Project();

            $project->title = $title['name'];
            $project->description = $title['description'];
            $project->thumb = $title['thumb'];
            $project->slug = Str::slug($project->title, '-');
            $project->cover_image = $title['img'];

            // $project->title = $faker->sentence(3);
            // $project->description = $faker->text();
            // $project->thumb = $faker->text();
            // $project->slug = Str::slug($project->title, '-');

            $project->save();
        }
    }
}
