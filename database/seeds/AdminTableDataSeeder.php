<?php

use Illuminate\Database\Seeder;
use App\Admin;
class AdminTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Admin::create([
	            'name' => 'admin',
	            'email' => 'admin@admin.com',
	            'password' =>'$2a$10$tP9DQOyVJp7L43bZm0aq0uNrw51gnkUSL7DcVTemBMqKf5JTH.G7a'
	        ]);

    }
}
