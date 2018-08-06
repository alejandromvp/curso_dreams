<?php

use Illuminate\Database\Seeder;
use App\User;

class NewUsers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name' => 'Alejandro',
        	'email' => 'alejanro17maestro@gmail.com',
        	'password' => bcrypt('ajvpaaaa1'),
            'role' => 'adminn',
        ]);
    }
}
