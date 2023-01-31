<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        
        \App\Models\Book::truncate();
  
        $json = file_get_contents("https://fakerapi.it/api/v1/books?_quantity=100");
       
        $countries = json_decode($json);
  
        foreach ($countries->data as $key => $value) {
            \App\Models\Book::create([
                "title" => $value->title,
                "author" => $value->author,
                "genre" => $value->genre,
                "description" => $value->description,
                "isbn" => $value->isbn,
                "image" => $value->image,
                "published" => $value->published,
                "publisher" => $value->publisher
            ]);
        }
        

        \App\Models\User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password'=>Hash::make('12345'),
        ]);
    }
}
