<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            'Technology',
            'Lifestyle',
            'Health and Fitness',
            'Web Development',
            'Crypto',
            'Business',
            'Tax',
            'Politics',
            'Creative',
            'Tutorial',
            'Coding',
            'Project Management',
            'Web',
            'Javascript',
            'React',
            'Vue'
        ];

        foreach ($tags as $tag) {
            Tag::create(['tag' => $tag]);
        }
    }
}
