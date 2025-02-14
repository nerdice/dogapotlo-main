<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Book;
use Illuminate\Support\Facades\DB;

class UserBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        $books = Book::all();

        foreach ($users as $user) {

            DB::table('user_book')->insert([
            
            'user_id' => $user->id,
            
            'book_id' => $books->random()->id,
            
            ]);
            
            DB::table('user_book')->insert([
            
            'user_id' => $user->id,
            
            'book_id' => $books->random()->id,
            
            ]);
            
            DB::table('user_book')->insert([
            
            'user_id' => $user->id,
            
            'book_id' => $books->random()->id,
            
            ]);
            
            }
    }
}
