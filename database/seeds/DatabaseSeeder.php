<?php

use Illuminate\Database\Seeder;
use App\Models\News;
use App\Models\Video;
use App\Models\Question;
use App\Models\Album;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('News')->delete();
        News::create([
            'slug' => 'news1',
            'image' => '/img/img-6.jpg',
            'image_inside' => '/img/showcase-2.jpg',
            'title' => 'First News',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis.',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie

Sed iaculis condimentum nibh posuere gravida. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec mollis tempor erat ut rhoncus. Nullam tincidunt pretium lectus. Ut at lacinia nisl. Fusce eu risus non quam vehicula volutpat in eget elit. Vestibulum id nunc tellus. Integer sollicitudin nibh est, a volutpat mi interdum et. Ut felis justo, rutrum a ligula ut, lobortis facilisis metus. Etiam vel enim ante. Integer tempor, odio id cursus iaculis, est magna porta metus, vitae mollis est lacus id nibh. Integer pharetra purus eros, hendrerit semper orci elementum sit amet. Etiam suscipit turpis nunc. Vivamus a eleifend lorem. Donec vehicula sem non aliquam consequa',
            'published_at' => Carbon::now()
        ]);

        News::create([
            'slug' => 'news2',
            'title' => 'Second News',
            'image' => '/img/img-5.jpg',
            'image_inside' => '/img/showcase-3.jpg',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Nullam tincidunt pretium lectus. Ut at lacinia nisl. Fusce eu risus non quam vehicula volutpat in eget elit. Vestibulum id nunc tellus. Integer sollicitudin nibh est, a volutpat mi interdum et. Ut felis justo, rutrum a ligula ut, lobortis facilisis metus. Etiam vel enim ante. Integer tempor, odio id cursus iaculis, est magna porta metus, vitae mollis est lacus id nibh. Integer pharetra purus eros, hendrerit semper orci elementum sit amet. Etiam suscipit turpis nunc. Vivamus a eleifend lorem. Donec vehicula sem non aliquam consequa',
            'published_at' => Carbon::now()
        ]);

        DB::table('Videos')->delete();
        Video::create([
            'title' => 'First Video',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis.',
            'src' => 'https://www.youtube.com/embed/loQrhU_eTCo',
            'published_at' => Carbon::now()
        ]);

        Video::create([
            'title' => 'Second Video',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis.',
            'src' => 'https://www.youtube.com/embed/rCRP-5om_3Y',
            'published_at' => Carbon::now()
        ]);

        DB::table('Questions')->delete();

        DB::table('Albums')->delete();
        Album::create([
            'slug' => 'first_album',
            'title' => 'First album',
            'wrap_image' => 'img/img-6.jpg',
            'published_at' => Carbon::now()
        ]);

        Album::create([
            'slug' => 'second_album',
            'title' => 'Second album',
            'wrap_image' => 'img/img-6.jpg',
            'published_at' => Carbon::now()
        ]);

        Album::create([
            'slug' => 'third_album',
            'title' => 'Third album',
            'wrap_image' => 'img/img-6.jpg',
            'published_at' => Carbon::now()
        ]);


    }
}
