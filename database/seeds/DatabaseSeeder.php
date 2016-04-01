<?php

use Illuminate\Database\Seeder;
use App\Models\News;
use App\Models\Video;
use App\Models\Question;
use App\Models\TestQuestion;
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
        DB::table('news')->delete();
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

        DB::table('videos')->delete();
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

        DB::table('questions')->delete();

        DB::table('albums')->delete();
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

        DB::table('test_questions')->delete();

        $testData = [
            [
                "question" => "What's ___ name. I'm Jack",
                "option1" => "your",
                "option2" => "you",
                "option3" => "his",
                "right_option" => 1
            ],
            [
                "question" => "Are you English? ___",
                "option1" => "Yes, I'm",
                "option2" => "No, I not",
                "option3" => "Yes, I am",
                "right_option" => 3
            ],
            [
                "question" => "My teacher's American. ___ from New York.",
                "option1" => "It's",
                "option2" => "He's",
                "option3" => "He",
                "right_option" => 2
            ],
            [
                "question" => "My mobile phone ___ Japanese.",
                "option1" => "it's",
                "option2" => "are",
                "option3" => "is",
                "right_option" => 3
            ],
            [
                "question" => "They ___ from Milan. They're from Rome.",
                "option1" => "not are",
                "option2" => "aren't",
                "option3" => "isn't",
                "right_option" => 2
            ],
            [
                "question" => "Mrs Jamieson is the director. That's ___ room.",
                "option1" => "her",
                "option2" => "his",
                "option3" => "he",
                "right_option" => 1
            ],
            [
                "question" => "Khaled and Omar are in Class 7. ___ teacher is David.",
                "option1" => "They're",
                "option2" => "His",
                "option3" => "Their",
                "right_option" => 3
            ],
            [
                "question" => "Maria is a student. ___'s in Class 4.",
                "option1" => "He",
                "option2" => "She",
                "option3" => "It",
                "right_option" => 2
            ],
            [
                "question" => "This is my girlfriend. ___ name is Paloma.",
                "option1" => "Your",
                "option2" => "Her",
                "option3" => "His",
                "right_option" => 2
            ],
            [
                "question" => "Are they Russian? Yes, they ___.",
                "option1" => "are",
                "option2" => "is",
                "option3" => "'re",
                "right_option" => 1
            ],
            [
                "question" => "Hello. ___'m Boris.",
                "option1" => "I",
                "option2" => "He",
                "option3" => "They",
                "right_option" => 1
            ],
            [
                "question" => "He ___ in Class 7.",
                "option1" => "are ",
                "option2" => "is",
                "option3" => "be",
                "right_option" => 2
            ],
            [
                "question" => "___'s your name?",
                "option1" => "How",
                "option2" => "What",
                "option3" => "Is",
                "right_option" => 2
            ],
            [
                "question" => "How ___ you?",
                "option1" => "be",
                "option2" => "is",
                "option3" => "are",
                "right_option" => 3
            ],
            [
                "question" => "___ are you from?",
                "option1" => "Where",
                "option2" => "Were",
                "option3" => "How",
                "right_option" => 1
            ],
            [
                "question" => "They aren't English. They ___ Scottish.",
                "option1" => "be",
                "option2" => "'re",
                "option3" => "is",
                "right_option" => 2
            ],
            [
                "question" => "___ your mother Mexican?",
                "option1" => "Does",
                "option2" => "Has",
                "option3" => "Is",
                "right_option" => 3
            ],
            [
                "question" => "Where ___ your parents from?",
                "option1" => "is",
                "option2" => "are",
                "option3" => "they",
                "right_option" => 2
            ],
            [
                "question" => "He's from Argentina. __ name's Leonardo.",
                "option1" => "His",
                "option2" => "He",
                "option3" => "Has",
                "right_option" => 1
            ],
            [
                "question" => "We're new students. ___ name are Tomas and Irina.",
                "option1" => "Our",
                "option2" => "Ours",
                "option3" => "We",
                "right_option" => 1
            ],
            [
                "question" => "What is the missing word? thirteen, ______, eleven, ten",
                "option1" => "twelve",
                "option2" => "twenty",
                "option3" => "fifteen",
                "right_option" => 1
            ],
            [
                "question" => "What is the missing word? thirty, ______, fifty, sixty",
                "option1" => "forty",
                "option2" => "seventy",
                "option3" => "ten",
                "right_option" => 1
            ],
            [
                "question" => "What is the missing word? Tuesday, Wednesday, ______",
                "option1" => "Friday",
                "option2" => "Monday",
                "option3" => "Thursday",
                "right_option" => 2
            ],
            [
                "question" => "What is the missing word? China - Chinese, Europe - ______",
                "option1" => "Europan",
                "option2" => "European",
                "option3" => "Europine",
                "right_option" => 2
            ],
            [
                "question" => "What is the missing word? Scotland - Scottish, ______ - Asian",
                "option1" => "Asie",
                "option2" => "Asia",
                "option3" => "Asialand",
                "right_option" => 2
            ],
            [
                "question" => "Complete the greetings. I'm Chris. Nice to _____ you.",
                "option1" => "meet",
                "option2" => "met",
                "option3" => "seeing",
                "right_option" => 1
            ],
            [
                "question" => "Complete the greetings. How are you? I'm very ____, thanks.",
                "option1" => "nice",
                "option2" => "well",
                "option3" => "early",
                "right_option" => 2
            ],
            [
                "question" => "Complete the greetings. _______. See you on Saturday.",
                "option1" => "Hello",
                "option2" => "Bye",
                "option3" => "Hi",
                "right_option" => 2
            ],
            [
                "question" => "Complete the greetings. _______. I'm Sam.",
                "option1" => "Please",
                "option2" => "Bye",
                "option3" => "Hi",
                "right_option" => 3
            ],
            [
                "question" => "Complete the greetings. How are you? I'm fine, ______ you.",
                "option1" => "thanks",
                "option2" => "thank",
                "option3" => "hello",
                "right_option" => 2
            ],

        ];

        foreach ($testData as $question) {
            TestQuestion::create([
                'question' => $question['question'],
                'option1' => $question['option1'],
                'option2' => $question['option2'],
                'option3' => $question['option3'],
                'right_option' => $question['right_option']
            ]);
        }



    }
}
