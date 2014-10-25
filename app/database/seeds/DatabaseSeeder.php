<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
            Eloquent::unguard();

            $this->call('UserTableSeeder');
            $this->call('OptionsTableSeeder');
	}

}

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create(array('username' => 'johndoe', 'password' => Hash::make('john;doe'), 'fullname' => 'John Doe', 'email' => 'john@doe.com', 'status' => 'active'));
    }

}

class OptionsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('options')->delete();

        DB::table('options')->insert(array('option_code' => 'sitename', 'option_content' => 'Laravel', 'option_auto' => 'yes', 'created_at' => new DateTime, 'updated_at' => new DateTime));
    }

}