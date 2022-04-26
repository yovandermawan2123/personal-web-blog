<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        User::create([
            'name' => 'Yovan Dermawan',
            'username' => 'yovandermawan',
            'email' => 'yovan@gmail.com',
            'password' => bcrypt('password')
        ]);
        // User::create([
        //     'name' => 'Afifah Dinda Tri Lestari',
        //     'email' => 'dinda@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'

        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'

        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'

        ]);

        Post::factory(20)->create();

        
        // Post::create([
        //     'Title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis autem sit est fugiat. Ea iure consequatur obcaecati labore, modi officiis harum libero adipisci similique pariatur est et cum ducimus illum quidem provident molestiae dolore eos explicabo voluptate veritatis.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis autem sit est fugiat. Ea iure consequatur obcaecati labore, modi officiis harum libero adipisci similique pariatur est et cum ducimus illum quidem provident molestiae dolore eos explicabo voluptate veritatis. Sapiente reiciendis, nemo veritatis pariatur exercitationem laboriosam! Accusantium quo porro debitis iure voluptates perferendis ratione explicabo tempora sint voluptatum. Ea perspiciatis expedita corrupti laborum sequi. Velit nisi, architecto eius corrupti corporis numquam ipsam ab error voluptas neque quasi. Eum aperiam eligendi tempora, error voluptate suscipit recusandae sequi repellat alias ipsa voluptatibus totam voluptates eaque facilis cumque velit aliquam pariatur voluptatum exercitationem natus asperiores illo nesciunt, placeat reiciendis? Illo reprehenderit deleniti accusantium totam nam ipsa praesentium fugiat ipsam ipsum optio esse harum beatae corrupti modi quas, nesciunt provident laudantium adipisci? Similique sint praesentium inventore ipsum, omnis expedita pariatur voluptatibus officia consequuntur aliquid eveniet, tempora laudantium repudiandae asperiores illum aliquam veniam distinctio beatae minima.',
        //     'category_id' => 1,
        //     'user_id' => 1
        //     ]);
        // Post::create([
        //     'Title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis autem sit est fugiat. Ea iure consequatur obcaecati labore, modi officiis harum libero adipisci similique pariatur est et cum ducimus illum quidem provident molestiae dolore eos explicabo voluptate veritatis.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis autem sit est fugiat. Ea iure consequatur obcaecati labore, modi officiis harum libero adipisci similique pariatur est et cum ducimus illum quidem provident molestiae dolore eos explicabo voluptate veritatis. Sapiente reiciendis, nemo veritatis pariatur exercitationem laboriosam! Accusantium quo porro debitis iure voluptates perferendis ratione explicabo tempora sint voluptatum. Ea perspiciatis expedita corrupti laborum sequi. Velit nisi, architecto eius corrupti corporis numquam ipsam ab error voluptas neque quasi. Eum aperiam eligendi tempora, error voluptate suscipit recusandae sequi repellat alias ipsa voluptatibus totam voluptates eaque facilis cumque velit aliquam pariatur voluptatum exercitationem natus asperiores illo nesciunt, placeat reiciendis? Illo reprehenderit deleniti accusantium totam nam ipsa praesentium fugiat ipsam ipsum optio esse harum beatae corrupti modi quas, nesciunt provident laudantium adipisci? Similique sint praesentium inventore ipsum, omnis expedita pariatur voluptatibus officia consequuntur aliquid eveniet, tempora laudantium repudiandae asperiores illum aliquam veniam distinctio beatae minima.',
        //     'category_id' => 1,
        //     'user_id' => 1


        // ]);
        // Post::create([
        //     'Title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis autem sit est fugiat. Ea iure consequatur obcaecati labore, modi officiis harum libero adipisci similique pariatur est et cum ducimus illum quidem provident molestiae dolore eos explicabo voluptate veritatis.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis autem sit est fugiat. Ea iure consequatur obcaecati labore, modi officiis harum libero adipisci similique pariatur est et cum ducimus illum quidem provident molestiae dolore eos explicabo voluptate veritatis. Sapiente reiciendis, nemo veritatis pariatur exercitationem laboriosam! Accusantium quo porro debitis iure voluptates perferendis ratione explicabo tempora sint voluptatum. Ea perspiciatis expedita corrupti laborum sequi. Velit nisi, architecto eius corrupti corporis numquam ipsam ab error voluptas neque quasi. Eum aperiam eligendi tempora, error voluptate suscipit recusandae sequi repellat alias ipsa voluptatibus totam voluptates eaque facilis cumque velit aliquam pariatur voluptatum exercitationem natus asperiores illo nesciunt, placeat reiciendis? Illo reprehenderit deleniti accusantium totam nam ipsa praesentium fugiat ipsam ipsum optio esse harum beatae corrupti modi quas, nesciunt provident laudantium adipisci? Similique sint praesentium inventore ipsum, omnis expedita pariatur voluptatibus officia consequuntur aliquid eveniet, tempora laudantium repudiandae asperiores illum aliquam veniam distinctio beatae minima.',
        //     'category_id' => 2,
        //     'user_id' => 2


        // ]);

    }
}
