<?php

namespace Database\Seeders;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	// get the current time for our created_at / updated_at
    	$now = Carbon::now()->toDateTimeString();

    	Category::insert([
    		['name' => 'CD', 'slug' => 'cd', 'created_at' => $now, 'updated_at' => $now],
    		['name' => 'Books', 'slug' => 'books', 'created_at' => $now, 'updated_at' => $now],    		
    	]);

    }
}
