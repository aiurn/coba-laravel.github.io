<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        User::create([
            'name' => 'Nurul Auliya',
            'email' => 'nurul@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias hic a quos ipsam excepturi laborum, blanditiis odit illo nisi laboriosam culpa at et quas, iste libero perferendis optio esse quibusdam.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim id doloremque, dolor assumenda suscipit eveniet eaque earum cum molestias, magnam distinctio itaque mollitia quia velit necessitatibus nemo. Alias assumenda reprehenderit animi similique. Vero ipsum reprehenderit dignissimos facere, ex iste aperiam tempora ipsam explicabo, ut quam ab debitis labore? Optio, saepe magnam? Fugit iure a suscipit aperiam ut accusantium, cumque quas fugiat eos rerum ex animi temporibus quae quasi provident pariatur officia deserunt possimus minima et. Praesentium nobis eaque tenetur corrupti quas consequatur, debitis veritatis? Dignissimos, ab! Quasi, commodi eligendi? Modi sunt nobis vitae dolore! Praesentium voluptate veritatis quaerat amet tempora!',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias hic a quos ipsam excepturi laborum, blanditiis odit illo nisi laboriosam culpa at et quas, iste libero perferendis optio esse quibusdam.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim id doloremque, dolor assumenda suscipit eveniet eaque earum cum molestias, magnam distinctio itaque mollitia quia velit necessitatibus nemo. Alias assumenda reprehenderit animi similique. Vero ipsum reprehenderit dignissimos facere, ex iste aperiam tempora ipsam explicabo, ut quam ab debitis labore? Optio, saepe magnam? Fugit iure a suscipit aperiam ut accusantium, cumque quas fugiat eos rerum ex animi temporibus quae quasi provident pariatur officia deserunt possimus minima et. Praesentium nobis eaque tenetur corrupti quas consequatur, debitis veritatis? Dignissimos, ab! Quasi, commodi eligendi? Modi sunt nobis vitae dolore! Praesentium voluptate veritatis quaerat amet tempora!',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias hic a quos ipsam excepturi laborum, blanditiis odit illo nisi laboriosam culpa at et quas, iste libero perferendis optio esse quibusdam.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim id doloremque, dolor assumenda suscipit eveniet eaque earum cum molestias, magnam distinctio itaque mollitia quia velit necessitatibus nemo. Alias assumenda reprehenderit animi similique. Vero ipsum reprehenderit dignissimos facere, ex iste aperiam tempora ipsam explicabo, ut quam ab debitis labore? Optio, saepe magnam? Fugit iure a suscipit aperiam ut accusantium, cumque quas fugiat eos rerum ex animi temporibus quae quasi provident pariatur officia deserunt possimus minima et. Praesentium nobis eaque tenetur corrupti quas consequatur, debitis veritatis? Dignissimos, ab! Quasi, commodi eligendi? Modi sunt nobis vitae dolore! Praesentium voluptate veritatis quaerat amet tempora!',
            'category_id' => 2,
            'user_id' => 1
        ]);
    }
}
