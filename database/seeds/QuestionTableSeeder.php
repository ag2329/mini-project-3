<?php

use Illuminate\Database\Seeder;
use \App\Question;
class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
         $users = App\User::all();
         $users->each(function ($user){
             $question = factory(\App\Question::class)->make();
             $question->user()->associate($user);
             $question->save();
         });
     }
}
