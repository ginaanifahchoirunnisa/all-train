<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

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
      
            // Post::create([
            //     'title' => 'Tutor desain web',
            //     'category_id' => 1,
            //     'user_id' => 1,
            //     'slug' => 'tutor-desain-web',
            //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, dignissimos, labore omnis non obcaecati sequi possimus quae ex, iste molestiae dicta? Expedita nostrum at architecto temporibus magni veritatis voluptatum doloremque autem nesciunt, tempora facilis officiis earum, quod recusandae ad molestiae veniam reiciendis soluta pariatur deleniti. Porro sed maxime nam! Temporibus?',
            //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis et distinctio consectetur odio ipsam reprehenderit aut laboriosam vitae quam, fuga fugit tenetur quos aperiam earum. Neque beatae totam natus dignissimos facere mollitia ipsa saepe recusandae provident ratione modi ullam nam eaque harum, dolor sed, id, incidunt voluptates explicabo aliquam quasi exercitationem quas hic. Nemo et nobis soluta amet repellat veniam saepe cupiditate, porro voluptatum ipsum perferendis quaerat quia natus qui debitis accusamus hic exercitationem eligendi iste autem? Commodi dignissimos sit obcaecati soluta est ipsa nisi officia velit. Expedita non, architecto deserunt dignissimos exercitationem amet fuga, minima cumque blanditiis labore sint.'
            // ]);

            // Post::create([
            //     'title' => 'Tutor PHP',
            //     'category_id' => 1,
            //     'user_id' => 2,
            //     'slug' => 'tutor-php',
            //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, dignissimos, labore omnis non obcaecati sequi possimus quae ex, iste molestiae dicta? Expedita nostrum at architecto temporibus magni veritatis voluptatum doloremque autem nesciunt, tempora facilis officiis earum, quod recusandae ad molestiae veniam reiciendis soluta pariatur deleniti. Porro sed maxime nam! Temporibus?',
            //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis et distinctio consectetur odio ipsam reprehenderit aut laboriosam vitae quam, fuga fugit tenetur quos aperiam earum. Neque beatae totam natus dignissimos facere mollitia ipsa saepe recusandae provident ratione modi ullam nam eaque harum, dolor sed, id, incidunt voluptates explicabo aliquam quasi exercitationem quas hic. Nemo et nobis soluta amet repellat veniam saepe cupiditate, porro voluptatum ipsum perferendis quaerat quia natus qui debitis accusamus hic exercitationem eligendi iste autem? Commodi dignissimos sit obcaecati soluta est ipsa nisi officia velit. Expedita non, architecto deserunt dignissimos exercitationem amet fuga, minima cumque blanditiis labore sint.'
            // ]);

            Post::factory(20)->create();
            
            
            Category::create([
                'name' => 'Programming',
                'slug' => 'programming'
            ]); 

            Category::create([
                'name' => 'Personal',
                'slug' => 'personal'
            ]); 

            Category::create([
                'name' => 'Tutor Design',
                'slug' => 'tutor-design'
            ]); 


            // User::create([
            //     'name' => 'Ginza wae',
            //     'email' => 'gina.anifah@gmail.com',
            //     'password' => '1232'
            // ]);


            // User::create([
            //     'name' => 'Rara wae',
            //     'email' => 'rara.we@gmail.com',
            //     'password' => '1232'
            // ]);
    
    
    }
}
