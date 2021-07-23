<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->create([
            'name' => 'John Doe',
        ]);

        Category::factory(3)->create();

        for ($i = 0; $i <= 5; $i++) {
            Post::factory(5)->create([
                'user_id' => $user->id,
                'category_id' => rand(1, 3),
            ]);
        }

//        User::truncate();
//        Post::truncate();
//        Category::truncate();
//
//        $user = User::factory()->create();
//
//        $personal = Category::create([
//            'name' => 'Personal',
//            'slug' => 'personal'
//        ]);
//
//        $family = Category::create([
//            'name' => 'Family',
//            'slug' => 'family'
//        ]);
//
//        $work = Category::create([
//            'name' => 'Work',
//            'slug' => 'work'
//        ]);
//
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $personal->id,
//            'title' => 'My Personal Post',
//            'slug' => 'my-personal-post',
//            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
//            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut dignissimos dolor dolorem ex ipsum nam obcaecati omnis placeat quibusdam veniam! Ad, asperiores at consequuntur corporis earum explicabo nisi quia vel velit voluptatum. Ad asperiores consectetur consequuntur dignissimos neque pariatur tenetur, vero. Commodi culpa dolorum earum enim esse, in incidunt laudantium maxime modi nam perferendis recusandae rem rerum! Ad consequuntur ducimus itaque laudantium, perferendis quam temporibus. Aliquam, amet aut cupiditate debitis doloremque eaque iure laborum laudantium minima mollitia placeat praesentium quaerat quasi. Deleniti dolores dolorum eius eligendi ipsam iste itaque laborum necessitatibus odit praesentium quos repudiandae ullam voluptas voluptatem voluptates, voluptatibus.'
//        ]);
//
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $work->id,
//            'title' => 'My Work Post',
//            'slug' => 'my-work-post',
//            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
//            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut dignissimos dolor dolorem ex ipsum nam obcaecati omnis placeat quibusdam veniam! Ad, asperiores at consequuntur corporis earum explicabo nisi quia vel velit voluptatum. Ad asperiores consectetur consequuntur dignissimos neque pariatur tenetur, vero. Commodi culpa dolorum earum enim esse, in incidunt laudantium maxime modi nam perferendis recusandae rem rerum! Ad consequuntur ducimus itaque laudantium, perferendis quam temporibus. Aliquam, amet aut cupiditate debitis doloremque eaque iure laborum laudantium minima mollitia placeat praesentium quaerat quasi. Deleniti dolores dolorum eius eligendi ipsam iste itaque laborum necessitatibus odit praesentium quos repudiandae ullam voluptas voluptatem voluptates, voluptatibus.'
//        ]);
//
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $family->id,
//            'title' => 'My Family Post',
//            'slug' => 'my-family-post',
//            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
//            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut dignissimos dolor dolorem ex ipsum nam obcaecati omnis placeat quibusdam veniam! Ad, asperiores at consequuntur corporis earum explicabo nisi quia vel velit voluptatum. Ad asperiores consectetur consequuntur dignissimos neque pariatur tenetur, vero. Commodi culpa dolorum earum enim esse, in incidunt laudantium maxime modi nam perferendis recusandae rem rerum! Ad consequuntur ducimus itaque laudantium, perferendis quam temporibus. Aliquam, amet aut cupiditate debitis doloremque eaque iure laborum laudantium minima mollitia placeat praesentium quaerat quasi. Deleniti dolores dolorum eius eligendi ipsam iste itaque laborum necessitatibus odit praesentium quos repudiandae ullam voluptas voluptatem voluptates, voluptatibus.'
//        ]);

    }
}
