<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use \App\Models\User;
use \App\Models\Category;
use \App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();

        Post::factory(20)->create();

        // MANUAL SEED USER
        // User::create([
        //     'name' => 'Yazid Dhiaulhaq Ismail',
        //     'email' => 'yazid@example.com',
        //     'password' => bcrypt('1234'),
        // ]);
        // User::create([
        //     'name' => 'Hendi Tono',
        //     'email' => 'tono@example.com',
        //     'password' => bcrypt('1234'),
        // ]);

        // MANUAL SEED CATEGORY
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        // MANUAL SEED POST
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, sequi illo tempora, at blanditiis dolor',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, sequi illo tempora, at blanditiis dolor quasi aperiam illum labore corporis ipsam eligendi aliquam minima aliquid! Hic cum a accusantium dolor.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit minima est natus dolorem. Voluptas sequi nobis et accusantium aut? A odit voluptates aspernatur nostrum dolorum illo est alias nihil sed?</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit minima est natus dolorem. Voluptas sequi nobis et accusantium aut? A odit voluptates aspernatur nostrum dolorum illo est alias nihil sed?</p>'
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'category_id' => 1,
        //     'user_id' => 2,
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, sequi illo tempora, at blanditiis dolor',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, sequi illo tempora, at blanditiis dolor quasi aperiam illum labore corporis ipsam eligendi aliquam minima aliquid! Hic cum a accusantium dolor.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit minima est natus dolorem. Voluptas sequi nobis et accusantium aut? A odit voluptates aspernatur nostrum dolorum illo est alias nihil sed?</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit minima est natus dolorem. Voluptas sequi nobis et accusantium aut? A odit voluptates aspernatur nostrum dolorum illo est alias nihil sed?</p>'
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, sequi illo tempora, at blanditiis dolor',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, sequi illo tempora, at blanditiis dolor quasi aperiam illum labore corporis ipsam eligendi aliquam minima aliquid! Hic cum a accusantium dolor.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit minima est natus dolorem. Voluptas sequi nobis et accusantium aut? A odit voluptates aspernatur nostrum dolorum illo est alias nihil sed?</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit minima est natus dolorem. Voluptas sequi nobis et accusantium aut? A odit voluptates aspernatur nostrum dolorum illo est alias nihil sed?</p>'
        // ]);
    }
}
