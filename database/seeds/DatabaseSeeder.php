<?php

use Illuminate\Database\Seeder;

use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        App\Models\DynamicPage::truncate();
        DB::table('users')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        
        $data = Faker\Factory::create();


        DB::table('dynamic_pages')->insert([
            'title'    => 'Resources',
            'page_url' => 'resources',
            'created_at'        => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at'        => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('dynamic_pages')->insert([
            'title'    => 'Facilities',
            'page_url' => 'facilities',
            'created_at'        => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at'        => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('dynamic_pages')->insert([
            'title'    => 'Library Catalogue',
            'page_url' => 'library-catalogue',
            'created_at'        => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at'        => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('dynamic_pages')->insert([
            'title'    => 'Policies',
            'page_url' => 'policies',
            'created_at'        => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at'        => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('dynamic_pages')->insert([
            'title'    => 'Acknowledgement',
            'page_url' => 'acknowledgement',
            'created_at'        => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at'        => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('dynamic_pages')->insert([
            'title'    => 'Location',
            'page_url' => 'location',
            'created_at'        => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at'        => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        

        User::create([
            'name'        => 'Admin',
            'username'    => 'admin',
            'image'       => 'user.jpg',
            'phone'       => $data->phoneNumber,
            'status'      => 1,
            'activated'   => 1,
            'email'       => 'admin@gmail.com',
            'password'    => bcrypt('secret'),
        ]);

    }
}
