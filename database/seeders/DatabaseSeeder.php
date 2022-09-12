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

        $user=User::factory()->create([
            'name'=>'MZ'
        ]);
         Post::factory(5)->create([
             'user_id'=>$user->id
         ]);

         /*User::truncate();
         Category::truncate();
         Post::truncate();
         $user = User::factory()->create();
         $personal=Category::create([
            'name'=>'Personal',
             'slug' =>'personal'
         ]);
         $work=Category::create([
            'name'=>'Work',
             'slug' =>'work'
         ]);
         $family=Category::create([
            'name'=>'Family',
             'slug' =>'family'
         ]);
         Post::create([
            'user_id'=>$user->id,
             'category_id'=>$personal->id,
             'title'=>'My Personal1 Post',
             'slug' =>'my-personal1-post',
             'excerpt'=>'Curabitur et sagittis dolor, et bibendum magna',
             'body'=>'<p>Nunc facilisis neque laoreet aliquet interdum. Sed in scelerisque nibh, sed eleifend enim. Donec mollis, orci ac pellentesque consectetur, tellus libero vestibulum quam, quis venenatis tellus velit ut nibh. Sed et mattis felis, quis dictum metus. Ut dui mi, pretium tincidunt dolor vitae, tempus scelerisque sapien. Quisque tincidunt ac quam vitae tristique. Vivamus bibendum ipsum placerat ante consequat placerat. Praesent mauris sapien, porttitor quis nunc maximus, fermentum placerat mi. Quisque interdum magna at ipsum dictum, ut gravida turpis consectetur. In sed suscipit felis. Cras sed elit a neque ultricies tempor sit amet vel ipsum. Nulla bibendum urna nec justo vulputate semper. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas efficitur ultricies odio quis imperdiet. Duis orci sem, tempor sed convallis ac, placerat id massa.Curabitur bibendum ullamcorper metus quis eleifend.</p>'
         ]);
         Post::create([
            'user_id'=>$user->id,
             'category_id'=>$work->id,
             'title'=>'My Work1 Post',
             'slug' =>'my-work1-post',
             'excerpt'=>'Curabitur et sagittis dolor, et bibendum magna',
             'body'=>'<p>Nunc facilisis neque laoreet aliquet interdum. Sed in scelerisque nibh, sed eleifend enim. Donec mollis, orci ac pellentesque consectetur, tellus libero vestibulum quam, quis venenatis tellus velit ut nibh. Sed et mattis felis, quis dictum metus. Ut dui mi, pretium tincidunt dolor vitae, tempus scelerisque sapien. Quisque tincidunt ac quam vitae tristique. Vivamus bibendum ipsum placerat ante consequat placerat. Praesent mauris sapien, porttitor quis nunc maximus, fermentum placerat mi. Quisque interdum magna at ipsum dictum, ut gravida turpis consectetur. In sed suscipit felis. Cras sed elit a neque ultricies tempor sit amet vel ipsum. Nulla bibendum urna nec justo vulputate semper. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas efficitur ultricies odio quis imperdiet. Duis orci sem, tempor sed convallis ac, placerat id massa.Curabitur bibendum ullamcorper metus quis eleifend.</p>'
         ]);
         Post::create([
            'user_id'=>$user->id,
             'category_id'=>$personal->id,
             'title'=>'My Personal2 Post',
             'slug' =>'my-personal2-post',
             'excerpt'=>'Curabitur et sagittis dolor, et bibendum magna',
             'body'=>'<p>Nunc facilisis neque laoreet aliquet interdum. Sed in scelerisque nibh, sed eleifend enim. Donec mollis, orci ac pellentesque consectetur, tellus libero vestibulum quam, quis venenatis tellus velit ut nibh. Sed et mattis felis, quis dictum metus. Ut dui mi, pretium tincidunt dolor vitae, tempus scelerisque sapien. Quisque tincidunt ac quam vitae tristique. Vivamus bibendum ipsum placerat ante consequat placerat. Praesent mauris sapien, porttitor quis nunc maximus, fermentum placerat mi. Quisque interdum magna at ipsum dictum, ut gravida turpis consectetur. In sed suscipit felis. Cras sed elit a neque ultricies tempor sit amet vel ipsum. Nulla bibendum urna nec justo vulputate semper. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas efficitur ultricies odio quis imperdiet. Duis orci sem, tempor sed convallis ac, placerat id massa.Curabitur bibendum ullamcorper metus quis eleifend.</p>'
         ]);
         Post::create([
            'user_id'=>$user->id,
             'category_id'=>$work->id,
             'title'=>'My Work2 Post',
             'slug' =>'my-work2-post',
             'excerpt'=>'Curabitur et sagittis dolor, et bibendum magna',
             'body'=>'<p>Nunc facilisis neque laoreet aliquet interdum. Sed in scelerisque nibh, sed eleifend enim. Donec mollis, orci ac pellentesque consectetur, tellus libero vestibulum quam, quis venenatis tellus velit ut nibh. Sed et mattis felis, quis dictum metus. Ut dui mi, pretium tincidunt dolor vitae, tempus scelerisque sapien. Quisque tincidunt ac quam vitae tristique. Vivamus bibendum ipsum placerat ante consequat placerat. Praesent mauris sapien, porttitor quis nunc maximus, fermentum placerat mi. Quisque interdum magna at ipsum dictum, ut gravida turpis consectetur. In sed suscipit felis. Cras sed elit a neque ultricies tempor sit amet vel ipsum. Nulla bibendum urna nec justo vulputate semper. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas efficitur ultricies odio quis imperdiet. Duis orci sem, tempor sed convallis ac, placerat id massa.Curabitur bibendum ullamcorper metus quis eleifend.</p>'
         ]);
         Post::create([
            'user_id'=>$user->id,
             'category_id'=>$family->id,
             'title'=>'My Family1 Post',
             'slug' =>'my-family1-post',
             'excerpt'=>'Curabitur et sagittis dolor, et bibendum magna',
             'body'=>'<p>Nunc facilisis neque laoreet aliquet interdum. Sed in scelerisque nibh, sed eleifend enim. Donec mollis, orci ac pellentesque consectetur, tellus libero vestibulum quam, quis venenatis tellus velit ut nibh. Sed et mattis felis, quis dictum metus. Ut dui mi, pretium tincidunt dolor vitae, tempus scelerisque sapien. Quisque tincidunt ac quam vitae tristique. Vivamus bibendum ipsum placerat ante consequat placerat. Praesent mauris sapien, porttitor quis nunc maximus, fermentum placerat mi. Quisque interdum magna at ipsum dictum, ut gravida turpis consectetur. In sed suscipit felis. Cras sed elit a neque ultricies tempor sit amet vel ipsum. Nulla bibendum urna nec justo vulputate semper. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas efficitur ultricies odio quis imperdiet. Duis orci sem, tempor sed convallis ac, placerat id massa.Curabitur bibendum ullamcorper metus quis eleifend.</p>'
         ]);*/
    }
}
