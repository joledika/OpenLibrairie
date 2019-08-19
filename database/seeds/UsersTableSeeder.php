<?php

use App\Category;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $user = factory('App\User',30)->create();
        factory('App\Account',2)->create();
        $category = factory('App\Category',10)->create();

        $user->each(function ($user){
            factory('App\Profile',1)->create([
                'user_id'=>$user->id,

            ]);


        });




        $user->each(function ($user) use ($category){
            factory('App\Contact',1)->create([
                'user_id'=>$user->id,

            ]);



            $book = factory('App\Book',10)->create([
                'user_id'=>$user->id,
                'category_id'=>$category->random()->id,
            ]);

            $book->each(function ($book) use ($user) {
                factory('App\Downloaded',1)->create([
                    'book_id'=>$book->id,

                ]);

             // factory('App\Commentary',6)->create([
             //        'book_id'=>$book->id,
             //        'user_id'=>$user->id,
             //    ]);



            });
                    factory('App\Commentary',20)->create([
                        'book_id'=>$book->random()->id,
                        'user_id'=>$user->id,
                    ]);




        });


    }
}
