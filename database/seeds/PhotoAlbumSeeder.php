<?php

use Illuminate\Database\Seeder;

class PhotoAlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('photo_albums')->delete();
        DB::table('photo_albums')->insert([
            'title' => 'Pictures of otters',
            'description' => 'A lot of cute otters.',
        ]);
    }
}
