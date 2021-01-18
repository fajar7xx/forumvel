<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use App\Models\Thread;

class ThreadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        Thread::truncate();

        $dummyWords = 'This is a Thread. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam cursus nibh vel neque posuere condimentum. Duis suscipit dui eget lorem malesuada, non facilisis urna eleifend. Pellentesque vel lacus leo. ';

        $threads = [
            [
                'subject' => 'Javascript',
                'thread' => $dummyWords,
                'type' => ' question'
            ],
            [
                'subject' => 'Python',
                'thread' => $dummyWords,
                'type' => ' question'
            ],
            [
                'subject' => 'PHP',
                'thread' => $dummyWords,
                'type' => ' question'
            ],
            [
                'subject' => 'HTML',
                'thread' => $dummyWords,
                'type' => ' question'
            ],
            [
                'subject' => 'Ruby',
                'thread' => $dummyWords,
                'type' => ' question'
            ],
        ];

        foreach ($threads as $thread){
            Thread::create($thread);
        }

        Schema::enableForeignKeyConstraints();
    }
}
